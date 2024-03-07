<?php
if (!defined('_PS_VERSION_')) {
    exit;
}


class pc_textSection extends Module
{
    public function __construct()
    {
        $this->name = 'pc_textSection';
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

        $this->displayName = $this->l('Sekcje z tekstem');
        $this->description = $this->l('Wyświetla sekcje z tekstem');

        $this->confirmUninstall = $this->l('Czy jesteś pewny, że chcesz odinstalować ten moduł?');

        if (!Configuration::get('pc_textSection')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return parent::install() && 
                $this->registerHook('displayWrapperBottom') &&
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
            'pc-textSection-css',
            'modulesgfb/'.$this->name.'/views/css/pc_textSection.css',
            [
              'media' => 'all',
              'priority' => 200,
            ]
        );
        $this->context->controller->registerJavascript(
            'pc-textSection-js',
            'modules/'.$this->name.'/views/js/pc_textSection.js',
            [
                'position' => 'bottom',
                'inline' => false,
                'priority' => 10,
            ]
        );
    }




    public function hookDisplayWrapperBottom($params)
        {
            if ('index' === $this->context->controller->php_self) {
                return $this->display(__FILE__, 'pc_textSection.tpl');
            }
            
        }

        public function isUsingNewTranslationSystem()
        {
            return true;
        }
}