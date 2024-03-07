<?php
if (!defined('_PS_VERSION_')) {
    exit;
}


class pc_whyUs extends Module
{
    public function __construct()
    {
        $this->name = 'pc_whyUs';
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

        $this->displayName = $this->l('kategorie strona głowna');
        $this->description = $this->l('Wyświetla kategorie na stornie głownej');

        $this->confirmUninstall = $this->l('Czy jesteś pewny, że chcesz odinstalować ten moduł?');

        if (!Configuration::get('pc_whyUs')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return parent::install() && 
                $this->registerHook('displayHome') &&
                $this->registerHook('actionFrontControllerSetMedia') 
                ;
            
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
  
    public function hookActionFrontControllerSetMedia($params)
    {   
        $this->context->controller->registerStylesheet(
            'pc-whyUs-min-css',
            'modules/'.$this->name.'/views/css/whyUs.min.css',
            [
              'media' => 'all',
              'priority' => 200,
            ]
        );
    }




    public function hookDisplayHome($params)
        {
           
            return $this->display(__FILE__, 'whyUs.tpl');
        }

    
}