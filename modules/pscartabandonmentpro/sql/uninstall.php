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

/*
* In some cases you should not drop the tables.
* Maybe the merchant will just try to reset the module
* but does not want to loose all of the data associated to the module.
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

$sql = [];

$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'cart_abandonment`';
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'cart_abandonment_target`';
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'cart_abandonment_discount`';
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'cart_abandonment_template`';
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'cart_abandonment_template_lang`';
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'cart_abandonment_customer_send`';
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'cart_abandonment_customer_unsubscribe`';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}