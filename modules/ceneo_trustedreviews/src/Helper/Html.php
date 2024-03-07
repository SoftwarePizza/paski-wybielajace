<?php
/**
 * NOTICE OF LICENSE.
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 * You must not modify, adapt or create derivative works of this source code
 *
 * @author    2022 Ceneo.pl sp. z o.o.
 * @copyright Ceneo.pl
 * @license   LICENSE.txt
 * @description Integrates store with Ceneo.pl Trusted Reviews Program
 */

namespace CeneoTrustedReviews\Helper;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Html
{
    public $_html;
    public $module;

    public function __construct()
    {
        $this->module = \Module::getInstanceByName('ceneo_trustedreviews');
    }

    public function displayInfoHeader()
    {
        $this->_html = '<div class="alert alert-info"><p>' . $this->l(
            'Launching Ceneo Trusted Reviews') . '</p><p>' . $this->l(
                'If you already have visible offers, start collecting feedback on your store. Enter your GUID 
              code, which you will find in ') . '<a target="_blank" 
        href="https://shops.ceneo.pl/Reviews/TrustedReviews/Information;instruction=true;guid=true#tag=ps">'
         . $this->l('Ceneo Panel in the Trusted Reviews tab') . '</a>. ' . $this->l('The service is free.')
             . '</p></div>';
        return $this->_html;
    }

    public function l($string, $specific = false, $locale = null)
    {
        return \Translate::getModuleTranslation(
            $this->module,
            $string,
            ($specific) ? $specific : $this->module->name,
            null,
            false,
            $locale
        );
    }
}
