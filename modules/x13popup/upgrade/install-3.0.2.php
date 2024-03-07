<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_3_0_2($object)
{
    $db = Db::getInstance();
    $db->execute('ALTER TABLE `'._DB_PREFIX_.'x13popup` DROP INDEX place');
    $db->execute('ALTER TABLE `'._DB_PREFIX_.'x13popup` MODIFY COLUMN place_ids TEXT NOT NULL DEFAULT \'\'');
    return true;    
}
