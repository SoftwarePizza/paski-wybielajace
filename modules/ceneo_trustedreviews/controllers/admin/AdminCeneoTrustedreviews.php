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
class AdminCeneoTrustedreviewsController extends ModuleAdminController
{
    public function init()
    {
        Tools::redirectAdmin(
            Context::getContext()->link->getAdminLink('AdminModules') . '&configure=ceneo_trustedreviews'
        );
    }

    public function __construct()
    {
        $this->module = 'ceneo_trustedreviews';
        $this->bootstrap = true;
        $this->context = Context::getContext();

        parent::__construct();
    }
}
