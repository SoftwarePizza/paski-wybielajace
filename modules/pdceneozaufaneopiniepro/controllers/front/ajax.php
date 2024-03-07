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

class PdCeneoZaufaneOpinieProAjaxModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        $this->ajax = true;
        $this->context = Context::getContext();
        parent::initContent();
    }

    public function displayAjax()
    {
        if (isset($this->context->cart)) {
            $id_cart = (int)$this->context->cart->id;
        } else {
            $cart = new Cart();
            $id_cart = (int)$this->context->cart->id;
        }

        
        $module = new PdCeneoZaufaneOpiniePro();

        if (Tools::getValue('action') === 'saveCeneoAcceptedStatus'
            && Tools::getValue('secure_key') === $module->secure_key) {
            $status = false;
            $accepted = (int)Tools::getValue('accepted');

            if ($accepted) {
                $status = $module->addOrUpdateDbEntry($id_cart, 0, 0, 1, '');
            } else {
                $module->addOrUpdateDbEntry($id_cart, 0, 0, 0, '');
            }
            die(Tools::jsonEncode($status));
        } elseif (Tools::getValue('action') === 'returnCeneoJs'
            && Tools::getValue('secure_key') === $module->secure_key) {
            $accepted = (int)Tools::getValue('accepted');
            die(Tools::jsonEncode($module->actionAjaxGenerateScript($id_cart, $accepted)));
        }
    }
}
