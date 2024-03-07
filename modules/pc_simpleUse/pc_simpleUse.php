<?php
if (!defined('_PS_VERSION_')) {
    exit;
}


class pc_simpleUse extends Module
{   
    
    const  AVAILABLE_HOOKS = [
        'displayHome',
        'actionFrontControllerSetMedia',
        'displayFooterProduct'
    ];
    public function __construct()
    {
        $this->name = 'pc_simpleUse';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'PandaCoders';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.8.9',
            'max' => '1.7.8.10',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Sekcja proste w użyciu');
        $this->description = $this->l('Wyświetla sekcje proste w użyciu');

        $this->confirmUninstall = $this->l('Czy jesteś pewny, że chcesz odinstalować ten moduł?');

        if (!Configuration::get('pc_simpleUse')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return parent::install() && $this->registerHook(self::AVAILABLE_HOOKS);
            
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
  
    public function hookActionFrontControllerSetMedia($params)
    {   
        $this->context->controller->registerStylesheet(
            'pc-simpleUse-css',
            'modules/'.$this->name.'/views/css/pc_simpleUse.css',
            [
              'media' => 'all',
              'priority' => 200,
            ]
        );
    }




    public function hookDisplayHome($params)
    {
        if ('index' === $this->context->controller->php_self) {
            return $this->display(__FILE__, 'pc_simpleUse.tpl');
        }
    }

    public function hookDisplayFooterProduct($params)
    {
        if ('product' === $this->context->controller->php_self) {
            return $this->display(__FILE__, 'pc_simpleUse.tpl');
        }
    }
    public function isUsingNewTranslationSystem()
    {
        return true;
    }
}