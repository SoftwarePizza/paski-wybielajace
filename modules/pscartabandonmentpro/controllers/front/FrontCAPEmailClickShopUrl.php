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
class pscartabandonmentproFrontCAPEmailClickShopUrlModuleFrontController extends ModuleFrontController
{
    /**
     *  Redirect the customer to the home after saving this action
     */
    public function initContent()
    {
        // Retrieve values
        $iCustomerId = (int) Tools::getValue('id_customer');
        $iReminderId = (int) Tools::getValue('id_reminder');
        $iCartId = (int) Tools::getValue('id_cart');
        $sUrlToken = Tools::getValue('token');

        $sVisualizeToken = sha1($iCartId . $iReminderId . $this->module->name . 'shop');

        // if the token is good : save the data 'click'
        if ($sUrlToken == $sVisualizeToken) {
            $data = ['click' => 1, 'visualize' => 1];
            $where = 'id_customer = ' . $iCustomerId . ' AND id_cart_abandonment = ' . $iReminderId . ' AND id_cart = ' . $iCartId;

            if (!Db::getInstance()->update('cart_abandonment_customer_send', $data, $where)) {
                return false;
            }
        }

        // redirect to front index
        Context::getContext()->cookie->id_cart = $iCartId;
        Tools::redirect(__PS_BASE_URI__);
    }
}
