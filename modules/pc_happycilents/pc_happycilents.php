<?php
if (!defined('_PS_VERSION_')) {
    exit;
}


class pc_happyCilents extends Module
{
    public function __construct()
    {
        $this->name = 'pc_happycilents';
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

        $this->displayName = $this->l('Sekcja Z opiniami klientów');
        $this->description = $this->l('Wyświetla sekcje Z opiniami klientów');

        $this->confirmUninstall = $this->l('Czy jesteś pewny, że chcesz odinstalować ten moduł?');

        if (!Configuration::get('pc_happyCilents')) {
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
            $this->registerHook('displayReassurance') &&
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
            'owl-carousel-css',
            'modules/' . $this->name . '/views/css/owl.carousel.min.css',
            [
                'media' => 'all',
                'priority' => 50,
            ]
        );
        $this->context->controller->registerStylesheet(
            'owl-carousel-theme-css',
            'modules/' . $this->name . '/views/css/owl.theme.default.min.css',
            [
                'media' => 'all',
                'priority' => 50,
            ]
        );
        $this->context->controller->registerJavascript(
            'jquery-js',
            'modules/' . $this->name . '/views/js/jquery-3.6.3.js',
            [
                'priority' => 10,
                'attribute' => 'async',
                //   'position' => 'head',

            ]
        );
        $this->context->controller->registerJavascript(
            'owl-carousel-js',
            'modules/' . $this->name . '/views/js/owl.carousel.min.js',
            [
                'priority' => 50,
                'attribute' => 'async',
            ]
        );
        $this->context->controller->registerJavascript(
            'happyclients-js',
            'modules/' . $this->name . '/views/js/happy.js',
            [
                'priority' => 40,
                'attribute' => 'async',
            ]
        );
    }



    public function hookDisplayReassurance($params)
    {   
        if ('product' === $this->context->controller->php_self) {
            return $this->display(__FILE__, 'pc_happyCilents.tpl');
        }
        
    }
    public function hookDisplayHome($params)
    {

        return $this->display(__FILE__, 'pc_happyCilents.tpl');
    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }
}       