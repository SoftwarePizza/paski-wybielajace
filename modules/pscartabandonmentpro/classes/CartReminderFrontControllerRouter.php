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
class CartReminderFrontControllerRouter
{
    /** @var pscartabandonmentpro */
    public $module;

    /**
     * @var Link
     */
    private $link;

    public function __construct()
    {
        /* @phpstan-ignore-next-line */
        $this->module = Module::getInstanceByName('pscartabandonmentpro');
        $this->link = Context::getContext()->link;
    }

    /**
     * Return a Module Front Controller Link
     *
     * @param mixed $sControllerName
     * @param mixed $aParamsUrl
     *
     * @return string
     */
    public function getModuleLink($sControllerName, $aParamsUrl)
    {
        return $this->link->getModulelink(
            $this->module->name,
            $this->module->controllers[$sControllerName],
            $aParamsUrl
        );
    }

    /**
     * Get the shop url controller
     *
     * @param int $iCustomerId
     * @param int $iReminderId
     * @param int $iCartId
     *
     * @return string
     */
    public function getShopUrlController($iCustomerId, $iReminderId, $iCartId)
    {
        return $this->getModulelink(
            'clickShopUrl',
            [
                'id_customer' => $iCustomerId,
                'id_reminder' => $iReminderId,
                'id_cart' => $iCartId,
                'token' => sha1($iCartId . $iReminderId . $this->module->name . 'shop'),
            ]
        );
    }

    /**
     * Get the shop cart controller
     *
     * @param int $iCustomerId
     * @param int $iReminderId
     * @param int $iCartId
     *
     * @return string
     */
    public function getShopCartController($iCustomerId, $iReminderId, $iCartId)
    {
        return $this->getModulelink(
            'clickCartUrl',
            [
                'id_customer' => $iCustomerId,
                'id_reminder' => $iReminderId,
                'id_cart' => $iCartId,
                'token' => sha1($iCartId . $iReminderId . $this->module->name . 'cart'),
            ]
        );
    }

    /**
     * Get the unsubscribe controller
     *
     * @param int $iCustomerId
     * @param int $iReminderId
     * @param int $iCartId
     *
     * @return string
     */
    public function getUnsubscribeController($iCustomerId, $iReminderId, $iCartId)
    {
        return $this->getModulelink(
            'unsubscribeJob',
            [
                'unsubscribe' => sha1($iCustomerId . date('m') . $this->module->name),
                'id_reminder' => $iReminderId,
                'id_cart' => $iCartId,
            ]
        );
    }

    /**
     * Get the shop product controller
     *
     * @param int $iCustomerId
     * @param int $iReminderId
     * @param int $iCartId
     *
     * @return string
     */
    public function getShopProductController($iCustomerId, $iReminderId, $iCartId, $iProductId)
    {
        return $this->getModulelink(
            'clickProductUrl',
            [
                'id_customer' => $iCustomerId,
                'id_reminder' => $iReminderId,
                'id_cart' => $iCartId,
                'id_product' => $iProductId,
                'token' => sha1($iCartId . $iReminderId . $this->module->name . 'cart'),
            ]
        );
    }
}
