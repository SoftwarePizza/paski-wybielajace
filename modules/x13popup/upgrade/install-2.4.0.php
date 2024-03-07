<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_2_4_0($object)
{
    return Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'x13popup` ADD referer TINYINT(1) DEFAULT 0 AFTER close_by') && Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'x13popup` ADD referer_url TEXT NULL DEFAULT NULL AFTER referer');
}
