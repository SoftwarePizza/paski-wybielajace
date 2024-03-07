<?php
if (!defined('_PS_VERSION_')) {
    exit;
}


class pc_talkToExperts extends Module
{
    public function __construct()
    {
        $this->name = 'pc_talkToExperts';
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

        $this->displayName = $this->l('Sekcja porozmawiaj z ekspertami');
        $this->description = $this->l('Wyświetla sekcje porozmawiaj z ekspertami');

        $this->confirmUninstall = $this->l('Czy jesteś pewny, że chcesz odinstalować ten moduł?');

        if (!Configuration::get('pc_talkToExperts')) {
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
            'pc-talkToExperts-css',
            'modules/'.$this->name.'/views/css/pc_talkToExperts.css',
            [
              'media' => 'all',
              'priority' => 200,
            ]
        );
    }




    public function hookDisplayHome($params)
        {
           
            return $this->display(__FILE__, 'pc_talkToExperts.tpl');
        }
        public function isUsingNewTranslationSystem()
        {
            return true;
        }
    
}