<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_2_3_0($object)
{
    return Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'x13popup` MODIFY COLUMN place ENUM(\'all\',\'home\',\'cms\',\'category\',\'product\',\'manufacturer\',\'order\',\'my-account\',\'best-sales\',\'new-products\',\'prices-drop\',\'category_products\') NOT NULL DEFAULT \'all\'');
}
