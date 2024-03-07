<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_2_1_0($object)
{
    Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'x13popup` ADD close_by TINYINT(1) DEFAULT 0 AFTER type');

    return true;
}
