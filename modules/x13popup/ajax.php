<?php

require_once dirname(__FILE__).'../../../config/config.inc.php';
require_once dirname(__FILE__).'../../../init.php';
require_once dirname(__FILE__).'/x13popup.php';

$x13popup = new x13popup;

if (Tools::getIsset('submitNewsletter') && Tools::getValue('email', 0)) {
    $honeyPotFields = ['website', 'url', 'firstname', 'lastname'];

    foreach ($honeyPotFields as $field) {
        if (Tools::getValue($field, 0)) {
            die('Access denied');
        }
    }

    if (Tools::getValue('secure_key') != $x13popup->secure_key) {
        echo 'ERROR::'.$x13popup->getErrorMessage();
        exit;
    }

    $email = trim(Tools::getValue('email'));
    $blocknewsletter = Module::getInstanceByName('blocknewsletter');
    if ((float) substr(_PS_VERSION_, 0, 3) < 1.5) {
        $blocknewsletter->hookLeftColumn(null);
    } else {
        $blocknewsletter->hookDisplayLeftColumn(null);
    }
    if ($blocknewsletter->error) {
        echo 'ERROR::'.$blocknewsletter->error;
    } else {
        echo 'OK::'.$blocknewsletter->valid;
    }
    exit;
}

if (Tools::getValue('handleCookie', 0)) {
    $x13popup = Module::getInstanceByName('x13popup');
    $idPopup = (int) Tools::getValue('x13popup_id');
    $expiration = (int) Tools::getValue('x13popup_expiration');

    if (Tools::getValue('type') == 'newsletter') {
        $expiration = 365;
    }

    $x13popup->handleCookie($idPopup, $expiration);
    exit;
}
