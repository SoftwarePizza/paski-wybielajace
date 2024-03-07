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

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_6_2($module)
{
    $module->registerHook('displayOrderDetail');
    return true;
}
