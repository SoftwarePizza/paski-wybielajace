<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
class pscartabandonmentproFrontCAPUnsubscribeJobModuleFrontController extends ModuleFrontController
{
    /** @var pscartabandonmentpro */
    public $module;

    /**
     * Get the unsubscribe confirmation
     *
     * @return void
     */
    public function displayAjaxConfirmUnsubscribe()
    {
        $id_customer = (int) Tools::getValue('id');

        // there must be an id_customer to confirm the unsubscribe
        if (!$id_customer) {
            $message = $this->module->l('Bad Token');
            $this->returnJson('error', $message);
        }

        $sAjaxToken = Tools::getValue('tk');
        $sCustomerEmail = Context::getContext()->customer->email;
        $sUnsubscribeToken = sha1($id_customer . date('m') . $this->module->name . $sCustomerEmail . 'confirm');

        // Wrong token
        if ($sUnsubscribeToken !== $sAjaxToken) {
            $message = $this->module->l('Bad Token');
            $this->returnJson('error', $message);
        }

        // Prepare datas to insert into cart_abandonment_customer_unsubscribe
        $data = [
            'id_customer' => $id_customer,
            'date' => date('Y-m-d'),
            'id_shop' => (int) Context::getContext()->shop->id,
        ];

        if (!Db::getInstance()->insert('cart_abandonment_customer_unsubscribe', $data)) {
            //save data in Prestashop Logger
            $errorMessage = 'CartAbandonmentPro : Insert unsubscribe : For customer #' . $id_customer . ' : ' . Db::getInstance()->getMsgError();
            PrestaShopLoggerCore::addLog($errorMessage, 3);

            $message = $this->module->l('An error occurred, please contact the administrator.');
            $this->returnJson('error', $message);
        }

        // Success
        $message = $this->module->l('Your request has been registered. You will no longer receive emails about your carts.');
        $this->returnJson('success', $message);
    }

    /**
     * Unsubscribe reminder email main method
     */
    public function initContent()
    {
        parent::initContent();

        $this->template = _PS_MODULE_DIR_ . '/' . $this->module->name . '/views/templates/front/email_unsubscribed.tpl';
        $this->context->smarty->assign([
            'logo' => $this->module->ps_url . '/img/logo.png',
            'url' => $this->module->ps_url,
            'css' => $this->module->css_path . 'front/front_email_unsubscribe.css',
            'js' => $this->module->js_path . 'front/front_email_unsubscribe.js',
            'jquery' => 'https://code.jquery.com/jquery-3.3.1.min.js',
            'bootstrap' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        ]);

        $context = Context::getContext();
        $id_customer = (int) $context->customer->id;

        if (!$id_customer) {
            // there must be an id_customer !
            $this->context->smarty->assign([
                'wrongToken' => true,
            ]);

            return false;
        }

        $sUnsubscribeToken = sha1($id_customer . date('m') . $this->module->name);
        $sUrlToken = Tools::getValue('unsubscribe');

        if ($sUnsubscribeToken !== $sUrlToken) {
            // Wrong token !
            $this->context->smarty->assign([
                'wrongToken' => true,
            ]);

            return false;
        }

        // Set email visualized
        $iCartId = (int) Tools::getValue('id_cart');
        $iReminderId = (int) Tools::getValue('id_reminder');
        $this->setEmailVisualized($id_customer, $iCartId, $iReminderId);

        // get the controller URL
        $sControllerUrl = $context->link->getModulelink(
            $this->module->name,
            $this->module->controllers['unsubscribeJob']
        );

        $sCustomerEmail = $context->customer->email;

        // If the customer has already unsubscribed, we won't show the unsubscribe buttons
        $bCustomerAlreadyUnsubscribed = $this->isCustomerAlreadyUnsubcribed($id_customer);

        $this->context->smarty->assign([
            'wrongToken' => false,
            'bCustomerAlreadyUnsubscribed' => $bCustomerAlreadyUnsubscribed,
            'token' => sha1($id_customer . date('m') . $this->module->name . $sCustomerEmail . 'confirm'),
            'customerid' => $id_customer,
            'controller_url' => $sControllerUrl,
            'email' => $sCustomerEmail,
        ]);
    }

    /**
     * Return a Json for Ajax
     *
     * @param string $status
     * @param string $message
     *
     * @return void
     */
    private function returnJson($status, $message)
    {
        $aJsonReturned = [
            'status' => $status,
            'message' => $message,
        ];

        exit(json_encode($aJsonReturned));
    }

    /**
     * Tell if the customer is already unsubscribed
     *
     * @param int $id_customer
     *
     * @return bool
     */
    private function isCustomerAlreadyUnsubcribed($id_customer)
    {
        $unsubscribed = Db::getInstance()->executeS('
            SELECT id_customer 
            FROM `' . _DB_PREFIX_ . 'cart_abandonment_customer_unsubscribe` 
            WHERE 1
                AND id_customer = ' . (int) $id_customer . '
                AND id_shop = ' . (int) Context::getContext()->shop->id
        );

        return (bool) $unsubscribed;
    }

    /**
     * setEmailVisualized
     *
     * @param int $iCustomerId
     * @param int $iCartId
     * @param int $iReminderId
     *
     * @return bool
     */
    private function setEmailVisualized($iCustomerId, $iCartId, $iReminderId)
    {
        $data = ['visualize' => 1];
        $where = 'id_customer = ' . $iCustomerId . ' AND id_cart_abandonment = ' . $iReminderId . ' AND id_cart = ' . $iCartId;

        if (!Db::getInstance()->update('cart_abandonment_customer_send', $data, $where)) {
            return false;
        }

        return true;
    }
}
