<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_3_2_1($object)
{
    return $object->registerHook('displayBackOfficeHeader');
}
