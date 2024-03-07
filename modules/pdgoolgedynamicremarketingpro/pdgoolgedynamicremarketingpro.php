<?php
/**
* 2012-2021 Patryk Marek PrestaDev.pl
*
* Patryk Marek PrestaDev.pl - PD Google Dynamic Remarketing - new with events 1.7.x Module © All rights reserved.
*
* DISCLAIMER
*
* Do not edit, modify or copy this file.
* If you wish to customize it, contact us at info@prestadev.pl.
*
* @author    Patryk Marek <info@prestadev.pl>
* @copyright 2012-2021 Patryk Marek @ PrestaDev.pl
* @license   Do not edit, modify or copy this file, if you wish to customize it, contact us at info@prestadev.pl.
* @link      http://prestadev.pl
* @package   PD Google Dynamic Remarketing - new with events 1.7.x Module
* @version   1.0.2
* @date      01-05-2021
*/

class PdGoolgeDynamicRemarketingPro extends Module
{
    private $html = '';
    private $errors = array();

    public $pdgoogle_conversion_id = '';
    public $secure_key;
    private $product_ids_type;
    private $add_global_gtag;

    private static $order_confirmation_exec = false;

    public function __construct()
    {
        $this->name = 'pdgoolgedynamicremarketingpro';
        $this->tab = 'advertising_marketing';
        $this->version = '1.3.1';
        $this->author = 'PrestaDev.pl';
        $this->bootstrap = true;
        $this->need_instance = 0;
        $this->module_key = '1df46d3452e13eb71yd6b1adgcr8ca32de2';

        parent::__construct();

        $this->displayName = $this->l('PD Google Dynamic Remarketing Pro');
        $this->description = $this->l('Integrate Google Dynamic Remarketing script into your shop with new events tracking');
        $this->confirmUninstall = $this->l('Are you sure you want to delete your details ?');

        $this->secure_key = Tools::encrypt($this->name);
        
        $this->pdgoogle_conversion_id = htmlspecialchars_decode(Configuration::get('PD_GA4P_GOOGLE_CONVERSION_ID'));
        $this->product_ids_type = Configuration::get('PD_GA4P_PRODUCT_ID_TYPE');
        $this->add_global_gtag = Configuration::get('PD_GA4P_GOOGLE_ADD_GLOBAL_GTAG');

        $this->ps_version_17 = (version_compare(Tools::substr(_PS_VERSION_, 0, 3), '1.7', '=')) ? true : false;

    }

    public function install()
    {
        if (!parent::install() ||
            !$this->registerHook('displayOrderConfirmation') ||
            !$this->registerHook('displayHeader') ||
            !$this->registerHook('displayFooter') ||
            !Configuration::updateValue('PD_GA4P_GOOGLE_ADD_GLOBAL_GTAG', 1) ||
            !Configuration::updateValue('PD_GA4P_PRODUCT_ID_TYPE', 0) ||
            !Configuration::updateValue('PD_GA4P_GOOGLE_CONVERSION_ID', '')
        ) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }
        return true;
    }

    public function getContent()
    {
        if (Tools::isSubmit('btnSubmit')) {
            $this->postValidation();
            if (!count($this->errors)) {
                $this->postProcess();
            } else {
                foreach ($this->errors as $err) {
                    $this->html .= $this->displayError($err);
                }
            }
        } else {
            $this->html .= '<br />';
        }

        $this->html .= '<h2>'.$this->displayName.' (v'.$this->version.')</h2><p>'.$this->description.'</p>';
        $this->html .= $this->renderForm();
        $this->html .= '<br />';

        return $this->html;
    }

    private function postValidation()
    {
        $this->context->controller->getLanguages();

        if (Tools::isSubmit('btnSubmit')) {
            if (!Tools::getValue('PD_GA4P_GOOGLE_CONVERSION_ID')) {
                $this->errors[] = $this->l('You must enter Your Google Dynamic Remarketing Conversion ID.');
            }
        }
    }

    private function postProcess()
    {
        if (Tools::isSubmit('btnSubmit')) {
            Configuration::updateValue('PD_GA4P_GOOGLE_CONVERSION_ID', trim(Tools::getValue('PD_GA4P_GOOGLE_CONVERSION_ID')));
            Configuration::updateValue('PD_GA4P_PRODUCT_ID_TYPE', Tools::getValue('PD_GA4P_PRODUCT_ID_TYPE'));
            Configuration::updateValue('PD_GA4P_GOOGLE_ADD_GLOBAL_GTAG', Tools::getValue('PD_GA4P_GOOGLE_ADD_GLOBAL_GTAG'));
        }
        $this->html .= $this->displayConfirmation($this->l('Settings updated'));
    }

    public function renderForm()
    {
        $switch = version_compare(_PS_VERSION_, '1.6.0', '>=') ? 'switch' : 'radio';

        $fields_form_1 = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Module configuration'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Google Coversion ID'),
                        'name' => 'PD_GA4P_GOOGLE_CONVERSION_ID',
                        'desc' => $this->l('Please enter Conversion Id, example: AW-123456789'),
                        'required' => true
                    ),
                    array(
                        'type' => $switch,
                        'label' => $this->l('Add global Google Tag'),
                        'class' => 't',
                        'name' => 'PD_GA4P_GOOGLE_ADD_GLOBAL_GTAG',
                        'desc' => $this->l('Option alows to add global Google Tag (if you dont have tag assistant installed in your site please enable that option other way disable it)'),
                        'values' => array(
                            array(
                                'id' => 'yes',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'no',
                                'value' => 0,
                                'label' => $this->l('No')
                            ),
                        )
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Product identifier'),
                        'name' => 'PD_GA4P_PRODUCT_ID_TYPE',
                        'width' => 300,
                        'class' => 'fixed-width-ld',
                        'desc' => $this->l('You can choose which product identifier we want to pass as a id to Google Dynamic Remarketing, if must match Your feed products identifiers'),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => '0',
                                    'name' => $this->l('Id product (default)')
                                ),
                                array(
                                    'id' => '1',
                                    'name' => $this->l('Id product-id product attribute')
                                ),
                                array(
                                    'id' => '2',
                                    'name' => $this->l('Id product_id product attribute')
                                ),
                                array(
                                    'id' => '3',
                                    'name' => $this->l('Product reference')
                                ),
                                array(
                                    'id' => '4',
                                    'name' => $this->l('Product EAN')
                                ),

                            ),
                            'id' => 'id',
                            'name' => 'name',
                        )
                    ),
                ),
                'submit' => array(
                    'name' => 'btnSubmit',
                    'title' => $this->l('Save settings'),
                )
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
        $helper->submit_action = 'btnSubmit';
        $admin_link = $this->context->link->getAdminLink('AdminModules', false);
        $helper->currentIndex = $admin_link.'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form_1));
    }

    public function getConfigFieldsValues()
    {
        $return = array();
        $return['PD_GA4P_GOOGLE_CONVERSION_ID'] = htmlspecialchars(Tools::getValue('PD_GA4P_GOOGLE_CONVERSION_ID', Configuration::get('PD_GA4P_GOOGLE_CONVERSION_ID')));
        $return['PD_GA4P_PRODUCT_ID_TYPE'] = Tools::getValue('PD_GA4P_PRODUCT_ID_TYPE', Configuration::get('PD_GA4P_PRODUCT_ID_TYPE'));
        $return['PD_GA4P_GOOGLE_ADD_GLOBAL_GTAG'] = htmlspecialchars(Tools::getValue('PD_GA4P_GOOGLE_ADD_GLOBAL_GTAG', Configuration::get('PD_GA4P_GOOGLE_ADD_GLOBAL_GTAG')));
        return $return;
    }

    public static function getControlerName()
    {
        $page_name = 'index';
        if (!empty(Context::getContext()->controller->php_self)) {
            $page_name = (string)Context::getContext()->controller->php_self;
        } else {
            $page_name = (string)Tools::getValue('controller');
        }
        return $page_name;
    }
    
    public function getProductIdStringByType($product, $id_product_attribute = false)
    {
        $id_lang = (int)$this->context->language->id;
        $ids_type = $this->product_ids_type;

        if ($product instanceof Product) {
            $id_product = (int)$product->id;
            $ean13 = (string)$product->ean13;
            $reference = (string)$product->reference;
            if (!$id_product_attribute) {
                $id_product_attribute = (int)$product->cache_default_attribute;
            }

            if ($id_product_attribute) {
                $attribute_combination_resume = $product->getAttributeCombinationsById($id_product_attribute, $id_lang, true);
            
                if ($attribute_combination_resume && is_array($attribute_combination_resume) && sizeof($attribute_combination_resume)) {
                    if (isset($attribute_combination_resume['ean13'])) {
                        $ean13 = (string)$attribute_combination_resume['ean13'];
                    }
                    if (isset($attribute_combination_resume['reference'])) {
                        $reference = (string)$attribute_combination_resume['reference'];
                    }
                }
            }
        } elseif (is_array($product)) {
            $id_product = (int)$product['id_product'];
            $ean13 = (string)$product['ean13'];
            $reference = (string)$product['reference'];
            if (!$id_product_attribute && isset($product['id_product_attribute'])) {
                $id_product_attribute = (int)$product['id_product_attribute'];
            }

            if (!$id_product_attribute && isset($product['product_attribute_id'])) {
                $id_product_attribute = (int)$product['product_attribute_id'];
            }

            if ($id_product_attribute) {
                $product = new Product($id_product);
                $attribute_combination_resume = $product->getAttributeCombinationsById($id_product_attribute, $id_lang, true);
                if ($attribute_combination_resume && sizeof($attribute_combination_resume)) {
                    $ean13 = (string)$attribute_combination_resume[0]['ean13'];
                    $reference = (string)$attribute_combination_resume[0]['reference'];
                }
            }
        }

        $ecomm_prodid = '';
        switch ($ids_type) {
            case '0':
                $ecomm_prodid = $id_product;
                break;
            case '1':
                if ($id_product_attribute) {
                    $ecomm_prodid = $id_product.'-'.$id_product_attribute;
                }
                break;
            case '2':
                if ($id_product_attribute) {
                    $ecomm_prodid = $id_product.'_'.$id_product_attribute;
                }
                break;
            case '3':
                $ecomm_prodid = $reference;
                break;
            case '4':
                $ecomm_prodid = $ean13;
                break;
            default:
                $ecomm_prodid = $id_product;
                break;
        }
        return $ecomm_prodid;
    }

    public function hookDisplayHeader($params)
    {
        if (!empty($this->pdgoogle_conversion_id)) {
            Media::addJsDef(array(
                'pdgoolgedynamicremarketingpro_secure_key' => $this->secure_key,
                'pdgoolgedynamicremarketingpro_ajax_link' => $this->context->link->getModuleLink('pdgoolgedynamicremarketingpro', 'ajax', array()),
            ));

            $this->context->controller->registerJavascript(
                'modules-pdgoolgedynamicremarketingpro-front',
                'modules/'.$this->name.'/views/js/scripts_17.js',
                array('position' => 'bottom', 'priority' => 1)
            );

            if ($this->add_global_gtag) {
                $id_currency = (int)$this->context->currency->id;
                $country = $this->context->country->iso_code;
                $currency = new Currency($id_currency);
                $currency_iso = $currency->iso_code;
                $id_lang = (int)$this->context->language->id;

                $this->smarty->assign(array(
                    'pd_google_conversion_id' => $this->pdgoogle_conversion_id,
                    'pd_google_currency' => $currency_iso,
                    'pd_google_country' => $country
                ));

                return $this->display(__FILE__, 'displayHeader.tpl');
            }
        }
    }

    public function hookDisplayFooter($params)
    {
        if (empty($this->pdgoogle_conversion_id)) {
            return;
        }

        $cn = self::getControlerName();
        $id_lang = (int)$this->context->language->id;
        $id_shop = (int)$this->context->shop->id;

        // determine if user loged in
        if (isset($this->context->cookie->account_created)) {
            $this->context->smarty->assign('account_created', 1);
        }

        switch ($cn) {

            case 'product':

                $product = new Product((int)Tools::getValue('id_product'), false, $id_lang);
                $id_product_attribute = (int)Tools::getValue('id_product_attribute');
                $price = Product::getPriceStatic($product->id, true, $id_product_attribute, 6, null, false, true);

                $this->smarty->assign(array(
                    'content_ids' =>  $this->getProductIdStringByType($product, $id_product_attribute),
                    'content_value' => Tools::ps_round($price, 2),
                    'pd_google_conversion_id' => $this->pdgoogle_conversion_id,
                    'tagType' => 'product',
                ));

                return $this->display(__FILE__, 'displayFooter.tpl');
            
            case 'category':
               
                $id_category = (int)Tools::getValue('id_category');
                $category = new Category($id_category, $id_lang, $id_shop);

                $orderBy  = Tools::getProductsOrder('by');
                $orderWay = Tools::getProductsOrder('way');
                $number = (int) Tools::getValue('resultsPerPage');
                if ($number <= 0) {
                    $number = Configuration::get('PS_PRODUCTS_PER_PAGE');
                }
                $page = (int)Tools::getValue('page', 1);

                $products_partial = $category->getProducts($id_lang, $page, $number, $orderBy, $orderWay);
                $category_products = Product::getProductsProperties($id_lang, $products_partial);
                foreach ($category_products as &$cp) {
                    $cp['content_ids'] = $this->getProductIdStringByType($cp);
                }
                
                $total_value = 0;
                foreach ($category_products as &$cp) {
                    $total_value = $cp['price'];
                }

                if (isset($category->id)) {
                    $this->smarty->assign(array(
                        'pd_google_conversion_id' => $this->pdgoogle_conversion_id,
                        'total_value' => $total_value,
                        'content_products' => $category_products,
                        'tagType' => 'category',
                    ));
                    return $this->display(__FILE__, 'displayFooter.tpl');
                }
                break;

            case 'prices-drop':
                
                $orderBy  = Tools::getProductsOrder('by');
                $orderWay = Tools::getProductsOrder('way');
                $number = (int) Tools::getValue('resultsPerPage');
                if ($number <= 0) {
                    $number = Configuration::get('PS_PRODUCTS_PER_PAGE');
                }
                $page = (int)Tools::getValue('page', 1);

                $products_partial = Product::getPricesDrop($id_lang, $page - 1, $number, false, $orderBy, $orderWay);
                $prices_drop_products = Product::getProductsProperties($id_lang, $products_partial);

                $total_value = 0;
                foreach ($prices_drop_products as &$pdp) {
                    $pdp['content_ids'] = $this->getProductIdStringByType($pdp);
                    $total_value = $pdp['price'];
                }

                if (is_array($prices_drop_products) && sizeof($prices_drop_products)) {
                    $this->smarty->assign(array(
                        'pd_google_conversion_id' => $this->pdgoogle_conversion_id,
                        'total_value' => $total_value,
                        'content_products' => $prices_drop_products,
                        'tagType' => 'prices-drop',
                    ));
                    return $this->display(__FILE__, 'displayFooter.tpl');
                }
                break;

            case 'new-products':
                
                $orderBy  = Tools::getProductsOrder('by');
                $orderWay = Tools::getProductsOrder('way');
                $number = (int) Tools::getValue('resultsPerPage');
                if ($number <= 0) {
                    $number = Configuration::get('PS_PRODUCTS_PER_PAGE');
                }
                $page = (int)Tools::getValue('page', 1);

                $products_partial = Product::getNewProducts($id_lang, $page - 1, $number, false, $orderBy, $orderWay);
                $new_products = Product::getProductsProperties($id_lang, $products_partial);

                $total_value = 0;
                foreach ($new_products as &$np) {
                    $np['content_ids'] = $this->getProductIdStringByType($np);
                    $total_value = $np['price'];
                }

                if (is_array($new_products) && sizeof($new_products)) {
                    $this->smarty->assign(array(
                        'pd_google_conversion_id' => $this->pdgoogle_conversion_id,
                        'total_value' => $total_value,
                        'content_products' => $new_products,
                        'tagType' => 'new-products',
                    ));
                    return $this->display(__FILE__, 'displayFooter.tpl');
                }
                break;

            case 'best-sales':
                
                $orderBy  = Tools::getProductsOrder('by');
                $orderWay = Tools::getProductsOrder('way');
                $number = (int) Tools::getValue('resultsPerPage');
                if ($number <= 0) {
                    $number = Configuration::get('PS_PRODUCTS_PER_PAGE');
                }
                $page = (int)Tools::getValue('page', 1);

                $products_partial = ProductSale::getBestSales($id_lang, $page - 1, $number, false, $orderBy, $orderWay);
                $best_sales_products = Product::getProductsProperties($id_lang, $products_partial);

                $total_value = 0;
                foreach ($best_sales_products as &$np) {
                    $np['content_ids'] = $this->getProductIdStringByType($np);
                    $total_value = $np['price'];
                }

                if (is_array($best_sales_products) && sizeof($best_sales_products)) {
                    $this->smarty->assign(array(
                        'pd_google_conversion_id' => $this->pdgoogle_conversion_id,
                        'total_value' => $total_value,
                        'content_products' => $best_sales_products,
                        'tagType' => 'best-sales',
                    ));
                    return $this->display(__FILE__, 'displayFooter.tpl');
                }
                break;

            case 'search':
                
                $search_string = Tools::getValue('s');
                $search_string = Tools::replaceAccentedChars(urldecode($search_string));

                $orderBy  = Tools::getProductsOrder('by');
                $orderWay = Tools::getProductsOrder('way');
                $number = (int) Tools::getValue('resultsPerPage');
                if ($number <= 0) {
                    $number = Configuration::get('PS_PRODUCTS_PER_PAGE');
                }
                $page = (int)Tools::getValue('page', 1);


                $products_partial = Search::find($this->context->language->id, $search_string, $page, $number, $orderBy, $orderWay);

                $search_products = Product::getProductsProperties($id_lang, $products_partial['result']);

                $total_value = 0;
                foreach ($search_products as &$sp) {
                    $sp['content_ids'] = $this->getProductIdStringByType($sp);
                    $total_value = $sp['price'];
                }

                if (is_array($search_products) && sizeof($search_products)) {
                    $this->smarty->assign(array(
                        'pd_google_conversion_id' => $this->pdgoogle_conversion_id,
                        'total_value' => $total_value,
                        'content_products' => $search_products,
                        'tagType' => 'search',
                    ));
                    return $this->display(__FILE__, 'displayFooter.tpl');
                }
                break;

            default:

                // try to fire up event of orderConfirmation if not executed on normal hook call
                $other_actions_html = '';
                if (self::$order_confirmation_exec == false) {
                    $other_actions_html .= $this->hookDisplayOrderConfirmation($params);
                }
                return $other_actions_html;
                break;
        }
    }

    public function hookDisplayOrderConfirmation($params)
    {
        if (!empty($this->pdgoogle_conversion_id)) {
            $order = false;
            if (isset($params['objOrder'])) {
                $order = $params['objOrder'];
            } elseif (isset($params['order'])) {
                $order = $params['order'];
            } elseif ($id_order = Tools::getValue('id_order')) {
                if (is_numeric($id_order)) {
                    $order = new Order($id_order);
                }
            } elseif ($id_order = Tools::getValue('id') && is_numeric($id_order)) {
                $id_order = strstr($id_order, '-', true);
                $order = new Order($id_order);
            } elseif ($id_cart = Tools::getValue('id_cart') && is_numeric($id_cart)) {
                $id_order = Order::getOrderByCartId($id_cart);
                $order = new Order($id_order);
            }

            if (!(Validate::isLoadedObject($order))) {
                return;
            }

            $order_value = $order->total_paid;

            $id_lang = (int)$this->context->language->id;
            $id_shop = (int)$this->context->shop->id;
            $id_currency = $order->id_currency;
            $currency = new Currency($id_currency);
            $currency_iso = $currency->iso_code;
            $order_products = $order->getProducts();

            foreach ($order_products as &$op) {
                $op['content_ids'] = $this->getProductIdStringByType($op);
            }


            $this->smarty->assign(array(
                'content_value' => Tools::ps_round($order_value, 2),
                'content_products' => $order_products,
            ));
            self::$order_confirmation_exec = true;
            return $this->display(__FILE__, 'displayOrderConfirmation.tpl');
        }
    }
}
