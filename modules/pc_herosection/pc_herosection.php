<?php
/**
 *
 * @author    Panda Coders https://pandacoders.com/
 *
 */
if (!defined('_PS_VERSION_'))
{
    exit;
}

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;

class pc_heroSection extends Module
{
    protected static $cache_products;

    public function __construct()
    {
        $this->name = 'pc_herosection';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Panda Coders';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Sekcja hero');
        $this->description = $this->l('Wyświetla sekcje hero na stronie głownej');

       

    }

    public function install()
    {
        $this->_clearCache('*');
        Configuration::updateValue('CFEATURED3_NBR_CUSTOM', 8);

        if (!parent::install() || !$this->registerHook('header') || !$this->registerHook('displayWrapperTop') || !$this->registerHook('addproduct') || !$this->registerHook('updateproduct') || !$this->registerHook('deleteproduct') || !$this->registerHook('categoryUpdate') ||  !$this->registerHook('displayHome') ||  !$this->registerHook('actionFrontControllerSetMedia'))
        {
            return false;
        }

        return true;
    }

    public function uninstall()
    {
        $this->_clearCache('*');

        return parent::uninstall();
    }
  

    public function getContent()
    {
        $output = '';
        $errors = array();
        if (Tools::isSubmit('submitCategoryFeatured'))
        {
            Configuration::updateValue('CFEATURED3_ID_CUSTOM', Tools::getValue('CFEATURED3_ID_CUSTOM'));
            Configuration::updateValue('CFEATURED3_WHERE_CUSTOM', Tools::getValue('CFEATURED3_WHERE_CUSTOM'));
    
            
            
            $nbr = (int)Tools::getValue('CFEATURED3_NBR_CUSTOM');
            if (!$nbr || $nbr <= 0 || !Validate::isInt($nbr) || $nbr % 2 != 0)
            {   
                $errors[] = $this->l('Nie prawidłowa liczba produktów, musi być parzysta'. $nbr);
            }
            else
            {   
                Tools::clearCache(Context::getContext()->smarty, $this->getTemplatePath('heroSection.tpl'));
                Configuration::updateValue('CFEATURED3_NBR_CUSTOM', (int)$nbr);
            }
            if (isset($errors) && count($errors))
            {
                $output .= $this->displayError(implode('<br />', $errors));
            }
            else
            {
                $output .= $this->displayConfirmation($this->l('Your settings have been updated.'));
            }
        }

        return  $output . $this->renderForm();
    }

    public function hookDisplayHeader($params)
    {
        $this->hookHeader($params);
    }

    public function hookHeader($params)
    {
        $this->context->controller->addCSS(($this->_path) . 'featuredcategory.css', 'all');
    }
    public function hookActionFrontControllerSetMedia($params)
    {
        $this->context->controller->registerJavascript(
            'pc-heroSection-js',
            'modules/'.$this->name.'/views/js/pc_heroSection.js',
            [
                'position' => 'bottom',
                'inline' => false,
                'priority' => 1000,
            ]
        );
        // $this->registerJavascript('heroSection ', 'js/heroSection.js', ['position' => 'bottom']);
    }

    public function prepareBlocksProducts($products)
    {
        $products_for_template = [];
        $assembler = new ProductAssembler($this->context);
        $presenterFactory = new ProductPresenterFactory($this->context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(new ImageRetriever($this->context->link), $this->context->link, new PriceFormatter(), new ProductColorsRetriever(), $this->context->getTranslator());
        $products_for_template = [];
        foreach ($products as $rawProduct)
        {
            $products_for_template[] = $presenter->present($presentationSettings, $assembler->assembleProduct($rawProduct), $this->context->language);
        }

        return $products_for_template;
    }

  


    public function hookDisplayWrapperTop($params)
    {
        if (configuration::get('CFEATURED3_WHERE_CUSTOM') == 2)
        {
            $category = new Category(Configuration::get('CFEATURED3_ID_CUSTOM'));
            $nb = (int)Configuration::get('CFEATURED3_NBR_CUSTOM');
    
          
            $this->context->smarty->assign(array(
                'products' => $this->prepareBlocksProducts($category->getAvailableProducts((int)Context::getContext()->language->id, 1, ($nb ? $nb : 8),null ,null ,false ,true , true,($nb ? $nb : 8))),
                'add_prod_display' => Configuration::get('PS_ATTRIBUTE_CATEGORY_DISPLAY'),
                'category_url' => $category->getLink()
            ));
            return $this->context->smarty->fetch('module:pc_herosection/views/templates/hook/pc_heroSection.tpl');
        }
    }

    public function psversion($part = 1)
    {
        $version = _PS_VERSION_;
        $exp = explode('.', $version);
        if ($part == 1)
        {
            return $exp[1];
        }
        if ($part == 2)
        {
            return $exp[2];
        }
        if ($part == 3)
        {
            return $exp[3];
        }
    }

    public function hookAddProduct($params)
    {
        $this->_clearCache('*');
    }

    public function hookUpdateProduct($params)
    {
        $this->_clearCache('*');
    }

    public function hookDeleteProduct($params)
    {
        $this->_clearCache('*');
    }

    public function hookCategoryUpdate($params)
    {
        $this->_clearCache('*');
    }

    public function _clearCache($template, $cache_id = null, $compile_id = null)
    {
        parent::_clearCache('featuredcategory.tpl');
        parent::_clearCache('tab.tpl', 'featuredcategory-tab');
    }

    public function renderForm()
    {
        $options = array(
            array(
                'id_option' => 2,
                'name' => 'Homepage'
            ),
        );

        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'description' => $this->l('Select category of products and define number of products you want to display'),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Category ID'),
                        'name' => 'CFEATURED3_ID_CUSTOM',
                        'class' => 'fixed-width-xs',
                        'required' => true,
                        'desc' => $this->l('Insert category ID, module will display products from this category') . ' <a target="blank" href="http://mypresta.eu/en/art/basic-tutorials/prestashop-how-to-get-category-id.html">' . $this->l('read how to get category ID') . '</a>',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Number of products to be displayed'),
                        'name' => 'CFEATURED3_NBR_CUSTOM',
                        'class' => 'fixed-width-xs',
                        'required' => true,
                        'desc' => $this->l('Set the number of products that you would like to display on homepage (default: 8).'),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Display in:'),
                        'name' => 'CFEATURED3_WHERE_CUSTOM',
                        'required' => true,
                        'options' => array(
                            'query' => $options,
                            'id' => 'id_option',
                            'name' => 'name'
                        ),
                    ),
                   
                ),
                'submit' => array('title' => $this->l('Save'),)
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->id = (int)Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitCategoryFeatured';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );
        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
            'CFEATURED3_NBR_CUSTOM' => Tools::getValue('CFEATURED3_NBR_CUSTOM', Configuration::get('CFEATURED3_NBR_CUSTOM')),
            'CFEATURED3_ID_CUSTOM' => Tools::getValue('CFEATURED3_ID_CUSTOM', Configuration::get('CFEATURED3_ID_CUSTOM')),
            'CFEATURED3_WHERE_CUSTOM' => Tools::getValue('CFEATURED3_WHERE_CUSTOM', Configuration::get('CFEATURED3_WHERE_CUSTOM')),
        
        );
    }
    public function isUsingNewTranslationSystem()
    {
        return true;
    }
}
