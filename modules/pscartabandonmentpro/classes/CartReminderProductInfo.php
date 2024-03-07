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
class CartReminderProductInfo
{
    /**
     * Allow to check if $linkRewrite is an array or not and only return a valid value
     *
     * @param array|string $linkRewrite
     *
     * @return string
     */
    public function checkLinkRewrite($linkRewrite)
    {
        if (is_array($linkRewrite)) {
            $aFilteredArray = array_filter($linkRewrite);
            $linkRewrite = current($aFilteredArray);
        }

        if (is_array($linkRewrite)) {
            throw (new InvalidArgumentException('Array to string conversion'));
        }

        return (string) $linkRewrite;
    }

    /**
     * Return random products Ids
     *
     * @param int $iLimit
     *
     * @return array
     */
    public function getRandomProducts($iLimit)
    {
        return Db::getInstance()->executeS('SELECT id_product, 1 as quantity FROM `' . _DB_PREFIX_ . 'product` WHERE active = 1 ORDER BY RAND() LIMIT ' . (int) $iLimit);
    }

    /**
     * Return Products IDs from a cart_id
     *
     * @param int $iCartId
     *
     * @return array
     */
    public function getProductsFromCartId($iCartId)
    {
        return Db::getInstance()->executeS(
            'SELECT cp.id_product,
                    cp.quantity
            FROM `' . _DB_PREFIX_ . 'cart_product` cp
            INNER JOIN `' . _DB_PREFIX_ . 'product` p ON cp.id_product = p.id_product
            WHERE
                p.active = 1
                AND cp.id_cart = ' . (int) $iCartId
        );
    }

    /**
     * Prepare smarty variable products
     *
     * @param array $aRandomProductIds
     *
     * @return array $aProductList
     */
    public function prepareProductListForTemplate($aRandomProductIds, $iShopId = null, $iLangId = null)
    {
        $oProductInfo = new CartReminderProductInfo();
        $context = Context::getContext();
        $aProductList = [];

        foreach ($aRandomProductIds as $aProductId) {
            $iProductId = (int) $aProductId['id_product'];
            $iQuantity = (int) $aProductId['quantity'];
            $oProduct = new Product($iProductId, false, $iLangId, $iShopId);
            // get Product price with taxes
            $fProductPrice = $iQuantity * $oProduct->getPriceStatic($iProductId);

            /** @var array $aGetCoverImage */
            $aGetCoverImage = Image::getCover($iProductId);
            $aProductToPush = [
                'id_product' => $iProductId,
                'name' => $oProduct->name,
                'description' => $oProduct->description_short,
                'price' => Tools::displayPrice($fProductPrice),
                'amount' => $iQuantity,
                'link' => $context->link->getProductLink($iProductId, null, null, null, $iLangId, $iShopId),
                'image' => $context->link->getImageLink($oProductInfo->checkLinkRewrite($oProduct->link_rewrite), $aGetCoverImage['id_image']),
            ];
            array_push($aProductList, $aProductToPush);
            unset($oProduct);
        }

        return $aProductList;
    }
}
