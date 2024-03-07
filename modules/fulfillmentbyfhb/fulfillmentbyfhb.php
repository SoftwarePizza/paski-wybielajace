<?php

if (!defined('_PS_VERSION_'))
    exit;

require_once __DIR__ . '/autoload.php';

class FulfillmentByFhb extends Module
{
    public function __construct()
    {
        $this->name = 'fulfillmentbyfhb';
        $this->tab = 'shipping_logistics';
        $this->version = '1.1';
        $this->author = 'FHB Group s.r.o.';
        $this->need_instance = 1;

        parent::__construct();

        $this->displayName = Context::getContext()->getTranslator()->trans('Fulfillment by FHB');
        $this->description = Context::getContext()->getTranslator()->trans('We are dealing with distribution of goods under one roof – we store, pack and deliver your goods and parcels.');
        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
    }

    public function getContent()
    {

    }

    public function install()
    {
        if (!parent::install()) {
            return false;
        }

        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        $this->registerHook('displayBackOfficeHeader');
        $this->registerHook('actionOrderStatusPostUpdate');

        $this->installTab(null, 'AdminFulfillmentByFhb', 'Fulfillment by FHB');
        $this->installTab('AdminFulfillmentByFhb', 'AdminFulfillmentByFhbProducts', 'Products');
        $this->installTab('AdminFulfillmentByFhb', 'AdminFulfillmentByFhbOrders', 'Orders');
        $this->installTab('AdminFulfillmentByFhb', 'AdminFulfillmentByFhbSettings', 'Settings');

        if (!\Configuration::get('FHB_API_TEST_SERVER')) {
            \Configuration::updateValue('FHB_API_TEST_SERVER', 'https://system-dev.fhb.sk/api/v2');
        }

        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }

        $this->uninstallTab('AdminFulfillmentByFhbSettings');
        $this->uninstallTab('AdminFulfillmentByFhbProducts');
        $this->uninstallTab('AdminFulfillmentByFhbOrders');
        $this->uninstallTab('AdminFulfillmentByFhb');

        return true;
    }

    private function installTab($parentClass = null, $className, $name)
    {
        $tab = new Tab();
        $tab->name = array();

        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = $name;
        }

        $tab->class_name = $className;
        $tab->id_parent = $parentClass ? (int) Tab::getIdFromClassName($parentClass) : 0;
        $tab->module = $this->name;
        $tab->save();

        Configuration::updateValue('FHB_TAB_' . $className, $tab->id);
    }

    private function uninstallTab($className)
    {
        $tab = new Tab(Configuration::get('FHB_TAB_' . $className));
        $tab->delete();
        Configuration::deleteByName('FHB_TAB_' . $className);
    }

    public function hookDisplayBackOfficeHeader()
    {
        $this->context->controller->addCSS($this->_path . 'css/admin.css');
    }

    public function hookActionOrderStatusPostUpdate($params)
    {
        $this->onOrderStatusPostUpdateExportOrder($params);
        $this->onOrderStatusPostUpdateCancelOrder($params);
    }

    private function onOrderStatusPostUpdateExportOrder($params)
    {
        $autoExport = Configuration::get('FHB_API_EXPORT_ORDER_AUTO');

        if ($autoExport !== '1') {
            return;
        }

        $orderExport = new \FHB\Prestashop\Services\OrderExport();
        $exportOrderStates = $orderExport->getExportStates();
        $newOrderStatus = (int) $params['newOrderStatus']->id;
        $controller = $this->context->controller;

        if (isset($exportOrderStates[$newOrderStatus])) {
            try {
                $result = $orderExport->exportOrder($params['id_order']);

                if ($result->isSuccess()) {
                    $controller->informations[] = sprintf('Fulfillment by FHB: Order %d was exported', $params['id_order']);
                } else {
                    $controller->errors[] = sprintf('Fulfillment by FHB: Failed to export order %d. Error: %s', $params['id_order'], $result->getMessage());
                }
            }
            catch (\Exception $e) {
                $controller->errors[] = sprintf('Fulfillment by FHB: Failed to export order %d. Error: %s', $params['id_order'], $e->getMessage());
            }
        }
    }

    private function onOrderStatusPostUpdateCancelOrder($params)
    {
        $cancelOrderStatus = (int) Configuration::get('FHB_API_CANCEL_ORDER_STATE');
        $newOrderStatus = (int) $params['newOrderStatus']->id;
        $controller = $this->context->controller;

        if ($cancelOrderStatus === $newOrderStatus) {
            try {
                $orderExport = new \FHB\Prestashop\Services\OrderExport();
                $orderExport->cancelOrder($params['id_order']);
                $controller->informations[] = sprintf('Fulfillment by FHB: Order %d was canceled', $params['id_order']);
            }
            catch (\Exception $e) {
                $controller->errors[] = sprintf('Fulfillment by FHB: Failed to cancel order %d. Error: %s', $params['id_order'], $e->getMessage());
            }
        }
    }
}