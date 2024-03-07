<?php
if (!defined('_PS_VERSION_')) {
    exit;
}


class pc_usingfb extends Module
{   
    const  AVAILABLE_HOOKS = [
        'displayWrapperBottom',
        'actionFrontControllerSetMedia',
    ];

    public function __construct()
    {
        $this->name = 'pc_usingfb';
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

        $this->displayName = $this->l('Sekcje z instrukcją jak używać pasków oraz sekcja facebook');
        $this->description = $this->l('Wyświetla sekcje z instrukcją jak używać pasków oraz sekcja facebook');

        $this->confirmUninstall = $this->l('Czy jesteś pewny, że chcesz odinstalować ten moduł?');

        if (!Configuration::get('pc_usingfb')) {
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
            'pc-usingfb-css',
            'modules/'.$this->name.'/views/css/pc_usingfb.css',
            [
              'media' => 'all',
              'priority' => 200,
            ]
        );
    }




    public function hookDisplayWrapperBottom($params)
        {   
            $site = $this->context->controller->php_self;
            if('index' === $site )
            {
                return $this->display(__FILE__, 'pc_usingfb.tpl');
            } elseif ('product' === $site) {
                return $this->display(__FILE__, 'pc_usingfb_product.tpl');
            }
           
        }

        public function isUsingNewTranslationSystem()
        {
            return true;
        }

}