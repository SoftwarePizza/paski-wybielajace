<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_2_5_0($object)
{
    $db = Db::getInstance();
    return $db->execute('ALTER TABLE `'._DB_PREFIX_.'x13popup` ADD hour_start VARCHAR(10) NOT NULL DEFAULT \'00:00:00\' AFTER date_end')
    && $db->execute('ALTER TABLE `'._DB_PREFIX_.'x13popup` ADD hour_end VARCHAR(10) NOT NULL DEFAULT \'23:59:59\' AFTER hour_start')
    && $db->execute('ALTER TABLE `'._DB_PREFIX_.'x13popup` ADD days VARCHAR(100) NULL DEFAULT NULL AFTER hour_end');
}
