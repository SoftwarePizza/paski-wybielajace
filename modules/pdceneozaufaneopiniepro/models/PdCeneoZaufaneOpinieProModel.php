<?php
/**
* 2012-2020 Patryk Marek PrestaDev.pl
*
* Patryk Marek PrestaDev.pl - PD Ceneo Zaufane Opinie Pro PrestaShop 1.6.x and 1.7.x Module © All rights reserved.
*
* DISCLAIMER
*
* Do not edit, modify or copy this file.
* If you wish to customize it, contact us at info@prestadev.pl.
*
*  @author    Patryk Marek PrestaDev.pl <info@prestadev.pl>
*  @copyright 2012-2020 Patryk Marek - PrestaDev.pl
*  @license   License is for use in domain / or one multistore enviroment (do not modify or reuse this code or part of it)
*  @link      http://prestadev.pl
*  @package   PD Ceneo Zaufane Opinie Pro PrestaShop 1.6.x and 1.7.x Module
*  @version   2.0.0
*  @date      24-12-2020
*/

class PdCeneoZaufaneOpinieProModel extends ObjectModel
{
    public $id_cart;
    public $id_order;
    public $id_customer;
    public $days_to_send;
    public $accepted;
    public $send;
    public $send_type;

    public $date_add = '0000-00-00 00:00:00';
    public $date_upd = '0000-00-00 00:00:00';

    public static $definition = array(
        'table' => 'pdceneozaufaneopiniepro',
        'primary' => 'id_cart',
        'multilang' => false,
        'fields' => array(
            'id_cart' =>         array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
            'id_order' =>        array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => false),
            'id_customer' =>     array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => false),
            'days_to_send' =>    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),
            'accepted' =>        array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => false),
            'send' =>            array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => false),
            'send_type' =>       array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => false),
            'date_add' =>        array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'required' => false),
            'date_upd' =>        array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'required' => false)
        )
    );

    public function __construct($id_cart)
    {
        parent::__construct($id_cart);
    }

    public function add($autodate = true, $null_values = false)
    {
        return parent::add($autodate, $null_values);
    }

    public function delete()
    {
        if ((int)$this->id_cart === 0) {
            return false;
        }
        return parent::delete();
    }

    public function update($null_values = false)
    {
        if ((int)$this->id_cart === 0) {
            return false;
        }
        return parent::update($null_values);
    }

    public static function getAcceptedValueByIdCart($id_cart)
    {
        $res = Db::getInstance()->getRow('SELECT `accepted` FROM `'._DB_PREFIX_.'pdceneozaufaneopiniepro` WHERE `id_cart` = '.(int)$id_cart);

        if ($res && isset($res['accepted'])) {
            return $res['accepted'] ? 1 : 0;
        } else {
            return 2;
        }
    }

    public static function getAcceptedValueByIdOrder($id_order)
    {
        $res = Db::getInstance()->getRow('SELECT `accepted` FROM `'._DB_PREFIX_.'pdceneozaufaneopiniepro` WHERE `id_order` = '.(int)$id_order);
        if (isset($res['accepted'])) {
            return $res['accepted'] ? 1 : 0;
        } else {
            return 2;
        }
    }

    public static function getNeedToSendByIdCart($id_cart)
    {
        $res = Db::getInstance()->getValue('SELECT `send` FROM `'._DB_PREFIX_.'pdceneozaufaneopiniepro` WHERE `id_cart` = '.(int)$id_cart);
        return $res ? 0 : 1;
    }

    public static function getNeedToSendByIdOrder($id_order)
    {
        $res = Db::getInstance()->getValue('SELECT `send` FROM `'._DB_PREFIX_.'pdceneozaufaneopiniepro` WHERE `id_order` = '.(int)$id_order);
        return $res ? 0 : 1;
    }

    public static function getNeedToSendByIdCustomer($id_customer)
    {
        $res = Db::getInstance()->getValue('SELECT `send` FROM `'._DB_PREFIX_.'pdceneozaufaneopiniepro` WHERE `id_customer` = '.(int)$id_customer);
        return $res ? 0 : 1;
    }

    public static function getIdCartByIdCustomer($id_customer)
    {
        return Db::getInstance()->getValue('SELECT MAX(`id_cart`) FROM `'._DB_PREFIX_.'pdceneozaufaneopiniepro` WHERE `id_customer` = '.(int)$id_customer.' AND `send` = 0');
    }

    public static function getIdOrderByIdCustomer($id_customer)
    {
        return Db::getInstance()->getValue('SELECT MAX(`id_order`) FROM `'._DB_PREFIX_.'pdceneozaufaneopiniepro` WHERE `id_customer` = '.(int)$id_customer.' AND `send` = 0');
    }

    public function installDB()
    {
        return Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'pdceneozaufaneopiniepro` (
                `id_cart` int(11) unsigned NOT NULL,
                `id_order` int(11) unsigned NOT NULL,
                `id_customer` int(11) unsigned NOT NULL,
                `send_type` tinyint(1) unsigned NOT NULL,
                `days_to_send` int(2) unsigned NOT NULL,
                `accepted` tinyint(1) NOT NULL DEFAULT \'0\',
                `send` tinyint(1) NOT NULL DEFAULT \'0\',
                `date_add` datetime,
                `date_upd` datetime,
                PRIMARY KEY (`id_cart`),
                KEY `id_order` (`id_order`),
                KEY `id_customer` (`id_customer`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;
        ');
    }

    public function uninstallDB()
    {
        return Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'pdceneozaufaneopiniepro`');
    }
}
