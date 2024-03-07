<?php
/**
 * NOTICE OF LICENSE.
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 * You must not modify, adapt or create derivative works of this source code
 *
 * @author    Ceneo.pl
 * @copyright Ceneo.pl
 * @license   LICENSE.txt
 * @description Integrates store with Ceneo.pl Trusted Reviews Program
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

use CeneoTrustedReviews\Helper\Html;

class Ceneo_TrustedReviews extends Module
{
    private $account_guid;
    private $days;
    private $_html = '';
    private $_postErrors = [];

    public function __construct()
    {
        $this->name = 'ceneo_trustedreviews';
        $this->tab = 'front_office_features';
        $this->version = '1.0.2';
        $this->author = 'Ceneo.pl';
        $this->need_instance = 0;
        $this->is_configurable = 1;
        $this->bootstrap = true;
        $this->module_key = 'a0faeb050a98036e9cbe1da92c220d4d';
        parent::__construct();

        $this->displayName = $this->l('Ceneo.pl Trusted Reviews');
        $this->description = $this->l('Integrates store with Ceneo.pl Trusted Reviews Program');
        $this->confirmUninstall = $this->l('Are You surre You want to uninstall module?');

        $this->account_guid = Configuration::get('CENEO_TR_GUID');
        $this->days = Configuration::get('CENEO_TR_DAYS');

        $this->ps_versions_compliancy = ['min' => '1.7', 'max' => _PS_VERSION_];
        $this->ps_version_17 = (version_compare(Tools::substr(_PS_VERSION_, 0, 3), '1.7', '=')) ? true : false;
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }
        if (
            !parent::install()
            || !$this->installTabs()
            || !$this->registerHook('displayOrderConfirmation')
            || !$this->registerHook('displayHeader')
        ) {
            return false;
        }
        Configuration::updateValue('CENEO_TR_GUID', '');
        Configuration::updateValue('CENEO_TR_DAYS', '3');

        return true;
    }

    public function installTabs()
    {
        $moduleName = $this->name;
        self::addTab('AdminCeneoClass', 'Ceneo', $moduleName, 'AdminTools', 'settings');
        self::addTab('AdminCeneoTrustedreviews', 'Zaufane Opinie', $moduleName, 'AdminCeneoClass', '');

        return true;
    }

    public function uninstallTabs()
    {
        self::removeTab('AdminCeneoTrustedreviews');

        return true;
    }

    public function uninstall()
    {
        Configuration::deleteByName('CENEO_TR_GUID');
        Configuration::deleteByName('CENEO_TR_DAYS');
        if (!parent::uninstall() || !$this->uninstallTabs()) {
            return false;
        }
        return true;
    }

    private function _postProcess()
    {
        if (Configuration::updateValue('CENEO_TR_GUID', Tools::getValue('CENEO_TR_GUID'))
            && Configuration::updateValue('CENEO_TR_DAYS', Tools::getValue('CENEO_TR_DAYS'))) {
            $this->_html .= $this->displayConfirmation($this->l('Settings updated'));
        } else {
            $this->_html .= $this->displayError($this->l('Settings failed'));
        }
    }

    private function _postValidation()
    {
        if (!Tools::getValue('CENEO_TR_GUID') || !Tools::getValue('CENEO_TR_DAYS')) {
            $this->_postErrors[] = $this->l('Please provide all data');
        }
    }

    public function getContent()
    {
        $this->registerHook('displayHeader');
        if (Tools::isSubmit('btnSubmit')) {
            $this->_postValidation();
            if (!count($this->_postErrors)) {
                $this->_postProcess();
            } else {
                foreach ($this->_postErrors as $err) {
                    $this->_html .= $this->displayError($err);
                }
            }
        }

        $html_helper = new Html();
        $this->_html .= $html_helper->displayInfoHeader();
        $this->_html .= $this->renderForm();
        return $this->_html;
    }

    public function renderForm()
    {
        $days_range_select = [];
        $days_range = range(0, 21);
        foreach ($days_range as $d) {
            $days_range_select[] = ['id' => $d, 'name' => $d];
        }
        $fields_form = [
            'form' => [
                'legend' => [
                   'title' => $this->l('Ceneo.pl Trusted Reviews configuration'),
                   'icon' => 'icon-cogs',
                ],
                'input' => [
                    [
                        'type' => 'text',
                        'label' => $this->l('Account GUID'),
                        'desc' => $this->l('Account GUID given by Ceneo'),
                        'name' => 'CENEO_TR_GUID',
                        'size' => 225,
                        'required' => true,
                    ],
                    [
                        'type' => 'select',
                        'label' => $this->l('Days'),
                        'desc' => $this->l('Work days to send questionnaire'),
                        'name' => 'CENEO_TR_DAYS',
                        'required' => true,
                        'options' => [
                            'query' => $days_range_select,
                            'id' => 'id',
                            'name' => 'name',
                        ],
                    ],
                ],
                'submit' => [
                    'title' => $this->l('Save settings'),
                ],
            ],
        ];
        $helper = new HelperForm();
        $helper->module = $this;
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?
            Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = [];
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) .
            '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = [
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        ];

        return $helper->generateForm([$fields_form]);
    }

    public function getConfigFieldsValues()
    {
        $return = [];
        $return['CENEO_TR_GUID'] = Tools::getValue('CENEO_TR_GUID', Configuration::get('CENEO_TR_GUID'));
        $return['CENEO_TR_DAYS'] = Tools::getValue('CENEO_TR_DAYS', Configuration::get('CENEO_TR_DAYS'));

        return $return;
    }

    public function hookDisplayOrderConfirmation($params)
    {
        if ($this->account_guid && isset($params['order']) && $params['order']) {
            $order = $params['order'];
            if ($order instanceof Order) {
                $client_email = $order->getCustomer()->email;
                $products = $order->getProducts();
                $products_ids = $this->getProductsIdsString($products);
                $currency = new Currency($order->id_currency);
                $currencyIsoCode = $currency->iso_code;

                $this->smarty->assign([
                    'guid' => $this->account_guid,
                    'order_id' => $order->id,
                    'email' => $client_email,
                    'products_ids' => $products_ids,
                    'days' => $this->days,
                    'products' => $products,
                    'total_paid' => $order->total_paid,
                    'currency' => $currencyIsoCode,
                ]);

                return $this->display(__FILE__, 'orderConfirmation.tpl');
            }
        }
        return '';
    }

    public function hookDisplayHeader($params)
    {
        $this->smarty->assign([
            'guid' => $this->account_guid,
        ]);
        return $this->display(__FILE__, 'displayHeader.tpl');
    }

    private function getProductsIdsString($products)
    {
        $ids = [];
        if (count($products)) {
            foreach ($products as $p) {
                $ids[] = $p['id_product'];
            }
            return '#' . join('#', $ids);
        } else {
            return '';
        }
    }

    public static function addTab($className, $tabName, $moduleName, $parentClassName, $icon)
    {
        if ($id_tab = Tab::getIdFromClassName($className)) {
            return new Tab($id_tab);
        }
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = $className;
        $tab->name = [];
        if (isset($icon)) {
            if (!empty($icon)) {
                $tab->icon = $icon;
            }
        }
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = $tabName;
        }
        $tab->id_parent = (int) Tab::getIdFromClassName($parentClassName);
        $tab->module = $moduleName;
        $tab->add();
        return $tab;
    }

    public static function removeTab($className)
    {
        $id_tab = (int) Tab::getIdFromClassName($className);
        $tab = new Tab($id_tab);
        if ($tab->name !== '') {
            $tab->delete();
        }
    }
}
