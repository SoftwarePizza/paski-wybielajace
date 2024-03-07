<?php
/**
* 2012-2020 Patryk Marek PrestaDev.pl
*
* Patryk Marek PrestaDev.pl - PD Ceneo Zaufane Opinie Pro PrestaShop 1.6.x and 1.7.x Module © All rights reserved.
*
* DISCLAIMER
*
* Do not edit, modify or copy this file.
* If you wish to customize it, contact us at info@prestadev.pl.
*
*  @author    Patryk Marek PrestaDev.pl <info@prestadev.pl>
*  @copyright 2012-2020 Patryk Marek - PrestaDev.pl
*  @license   License is for use in domain / or one multistore enviroment (do not modify or reuse this code or part of it)
*  @link      http://prestadev.pl
*  @package   PD Ceneo Zaufane Opinie Pro PrestaShop 1.6.x and 1.7.x Module
*  @version   2.0.0
*  @date      24-12-2020
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(dirname(__FILE__).'/models/PdCeneoZaufaneOpinieProModel.php');

class PdCeneoZaufaneOpiniePro extends Module
{
    public $opinie_widget;
    public $opinie_work_days;
    public $opinie_default_accepted;
    public $opinie_widget_recom_hook;
    public $opinie_widget_id;
    public $opinie_only_checkbox;

    public $ceneo_account_guid;
    public $ceneo_url;

    private $html = '';
    private $postErrors = array();

    public function __construct()
    {
        $this->name = 'pdceneozaufaneopiniepro';
        $this->tab = 'front_office_features';
        $this->version = '2.1.0';
        $this->author = 'PrestaDev.pl';
        $this->need_instance = 0;
        $this->is_configurable = 1;
        $this->module_key = 'b688ffbd8f9896a124d6bccbb26a9222';
        $this->secure_key = Tools::encrypt($this->name._COOKIE_KEY_);
        $this->module_dir = _MODULE_DIR_.$this->name.'/';
        $this->bootstrap = true;

        parent::__construct();

        $this->context = Context::getContext();
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => '1.7.99.99');
        $this->displayName = $this->l('PD Ceneo Trusted Reviews Pro');
        $this->description = $this->l('Integrate Ceneto Trusted Reviews program in Your store + extra Ceneo Widgets');
        $this->confirmUninstall = $this->l('Are You surre You want to uninstall module?');

        $this->opinie_ceneo_account_guid = trim(Configuration::get('PD_CZO_GUID'));
        $this->opinie_work_days = Configuration::get('PD_CZO_WORK_DAYS');
        $this->opinie_form_hook = Configuration::get('PD_CZO_FORM_HOOK');
        $this->opinie_widget = Configuration::get('PD_CZO_WIDGET');
        $this->opinie_widget_embed = Configuration::get('PD_CZO_WIDGET_EMBED');
        $this->opinie_widget_embed_hook = Configuration::get('PD_CZO_WIDGET_EMBED_HOOK');
        $this->opinie_widget_embed_url = trim(Configuration::get('PD_CZO_WIDGET_EMBED_URL'));
        $this->opinie_default_accepted = Configuration::get('PD_CZO_ACCEPTED');
        $this->opinie_widget_recom_hook = Configuration::get('PD_CZO_WIDGET_RECOM_HOOK');
        $this->opinie_widget_id = trim(Configuration::get('PD_CZO_WIDGET_RECOM_ID'));
        $this->opinie_widget_url = trim(Configuration::get('PD_CZO_WIDGET_RECOM_URL'));
        $this->opinie_widget_recom = Configuration::get('PD_CZO_WIDGET_RECOM');
        $this->opinie_hide_confirm = Configuration::get('PD_CZO_HIDE_CONFIRM');
        $this->opinie_work_mode = Configuration::get('PD_CZO_WORK_MODE');
        $this->opinie_only_checkbox = Configuration::get('PD_CZO_DISPLAY_ONLY_CHECKBOX');
        $this->ceneo_url = 'https://ssl.ceneo.pl/transactions/track/v2/script.js?accountGuid='.$this->opinie_ceneo_account_guid.'';

        $this->ps_version_16 = (version_compare(Tools::substr(_PS_VERSION_, 0, 3), '1.6', '=')) ? true : false;
        $this->ps_version_17 = (version_compare(Tools::substr(_PS_VERSION_, 0, 3), '1.7', '=')) ? true : false;
        $this->ps_version_1770_lte = (version_compare(Tools::substr(_PS_VERSION_, 0, 7), '1.7.7.0', '<')) ? true : false;

    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        if (parent::install() == false
            || !$this->registerHook('actionObjectOrderAddAfter')
            || !$this->registerHook('top')
            || !$this->registerHook('footer')
            || !$this->registerHook('displayAdminOrder')
            || !$this->registerHook('displayBeforeBodyClosingTag')
            || !$this->registerHook('displayPaymentTop')
            || !$this->registerHook('displayBackOfficeHeader')
            || !$this->registerHook('displayAdminOrderSide')
            || !$this->registerHook('header')
            || !$this->registerHook('leftColumn')
            || !$this->registerHook('productFooter')
            || !$this->registerHook('rightColumn')
            || !$this->registerHook('beforeCarrier')
            || !$this->registerHook('shoppingCart')
            || !$this->registerHook('displayPdCeneoZaufaneOpinieCustom')
            || !$this->registerHook('displayPdCeneoZaufaneOpinieTrustedEmbededCustom')
            || !PdCeneoZaufaneOpinieProModel::installDB()) {
            return false;
        }

        Configuration::updateValue('PD_CZO_GUID', '');
        Configuration::updateValue('PD_CZO_WORK_MODE', 1);
        Configuration::updateValue('PD_CZO_ACCEPTED', 1);
        Configuration::updateValue('PD_CZO_DISPLAY_ONLY_CHECKBOX', 0);
        Configuration::updateValue('PD_CZO_HIDE_CONFIRM', 0);
        Configuration::updateValue('PD_CZO_WORK_DAYS', 5);
        Configuration::updateValue('PD_CZO_WIDGET', 0);
        Configuration::updateValue('PD_CZO_WIDGET_EMBED', 0);
        Configuration::updateValue('PD_CZO_WIDGET_EMBED_HOOK', 0);
        Configuration::updateValue('PD_CZO_WIDGET_EMBED_URL', 'example: http://www.ceneo.pl/11111-0v');
        Configuration::updateValue('PD_CZO_WIDGET_RECOM', 0);
        Configuration::updateValue('PD_CZO_WIDGET_RECOM_HOOK', 0);
        Configuration::updateValue('PD_CZO_FORM_HOOK', 1);
        Configuration::updateValue('PD_CZO_WIDGET_RECOM_ID', '');
        Configuration::updateValue('PD_CZO_WIDGET_RECOM_URL', 'example: http://www.ceneo.pl/11111-0v');
        return true;
    }

    public function uninstall()
    {
        Configuration::deleteByName('PD_CZO_GUID');
        Configuration::deleteByName('PD_CZO_ACCEPTED');
        Configuration::deleteByName('PD_CZO_WORK_DAYS');
        Configuration::deleteByName('PD_CZO_HIDE_CONFIRM');
        Configuration::deleteByName('PD_CZO_WIDGET');
        Configuration::deleteByName('PD_CZO_WIDGET_EMBED');
        Configuration::deleteByName('PD_CZO_WIDGET_EMBED_HOOK');
        Configuration::deleteByName('PD_CZO_WIDGET_RECOM');
        Configuration::deleteByName('PD_CZO_WIDGET_RECOM_HOOK');
        Configuration::deleteByName('PD_CZO_WIDGET_RECOM_ID');
        Configuration::deleteByName('PD_CZO_WIDGET_RECOM_URL');
        Configuration::deleteByName('PD_CZO_HIDE_CONFIRM');
        Configuration::deleteByName('PD_CZO_WORK_MODE');
        Configuration::deleteByName('PD_CZO_DISPLAY_ONLY_CHECKBOX');

        if (!parent::uninstall()
            || !PdCeneoZaufaneOpinieProModel::uninstallDB()) {
            return false;
        }
        return true;
    }

    public function getContent()
    {
        if (Tools::isSubmit('btnSubmit')) {
            $this->postValidation();
            if (!count($this->postErrors)) {
                $this->postProcess();
            } else {
                foreach ($this->postErrors as $err) {
                    $this->html .= $this->displayError($err);
                }
            }
        } else {
            $this->html .= '<br />';
        }
        $this->html .= '<h2>'.$this->displayName.' (v'.$this->version.')</h2><p>'.$this->description.'</p>';
        $this->html .= $this->renderForm();
        return $this->html;
    }

    private function postProcess()
    {
        if (Tools::isSubmit('btnSubmit')) {
            $form_values = $this->getConfigFormValues();
            foreach (array_keys($form_values) as $key) {
                Configuration::updateValue($key, Tools::getValue($key));
            }
            $this->html .= $this->displayConfirmation($this->l('Settings have been updated'));
        }
    }

    private function postValidation()
    {
        if (!Tools::getValue('PD_CZO_GUID')) {
            $this->postErrors[] = $this->l('Please provide Ceneo account GUID');
        }

        if (Tools::getValue('PD_CZO_WIDGET_EMBED') && !Tools::getValue('PD_CZO_WIDGET_EMBED_URL')) {
            $this->postErrors[] = $this->l('Please provide Ceneo widget url');
        }

        if (Tools::getValue('PD_CZO_WIDGET_RECOM') && !Tools::getValue('PD_CZO_WIDGET_RECOM_ID')) {
            $this->postErrors[] = $this->l('Please provide Ceneo recomendations widget id');
        }

        if (Tools::getValue('PD_CZO_WIDGET_RECOM') && !Tools::getValue('PD_CZO_WIDGET_RECOM_URL')) {
            $this->postErrors[] = $this->l('Please provide Ceneo recomendations widget url');
        }
    }

    public function renderForm()
    {
        $days_range_select = array();
        $days_range = range(0, 21);
        foreach ($days_range as $d) {
            $days_range_select[] = array('id' => $d, 'value' => $d);
        }
        $recom_ahref_str = htmlentities('<a href="http://www.ceneo.pl/;11111-0v" rel="nofollow" title="Ceneo.pl" target="_blank">Ceneo.pl</a>');
        $widget_embed_ahref_str = htmlentities('<a href="http://www.ceneo.pl/11111-0v" rel="nofollow" target="_blank">&raquo; przeczytaj wszystkie opinie</a>');
        $switch = version_compare(_PS_VERSION_, '1.6.0', '>=') ? 'switch' : 'radio';

        $options_work_mode_16 = array(
            array(
                'id' => '1',
                'name' => $this->l('Payment method select step (before order is placed)')
            ),
            array(
                'id' => '2',
                'name' => $this->l('After customer get back to store from payemnt gateway (after order is placed)')
            ),
            array(
                'id' => '3',
                'name' => $this->l('After accepting agreeing form (before order is placed) works only in option "Hide agreeing form" is disabled')
            )
        );

        $options_work_mode_17 = array(
            array(
                'id' => '1',
                'name' => $this->l('After selecting payment method (before order is placed)')
            ),
            array(
                'id' => '2',
                'name' => $this->l('After customer get back to store from payemnt gateway (after order is placed)')
            ),
            array(
                'id' => '3',
                'name' => $this->l('After accepting agreeing form (before order is placed) works only in option "Hide agreeing form" is disabled')
            )
        );

        $options_placement_16 = array(
            array(
                'id' => '1',
                'name' => $this->l('Before carriers list (displayBeforeCarrier)')
            ),
            array(
                'id' => '2',
                'name' => $this->l('Shopping cart (displayShoppingCart)')
            ),
            array(
                'id' => '4',
                'name' => $this->l('Custom hook position (displayPdCeneoZaufaneOpinieCustom)')
            ),
        );

        $options_placement_17 = array(
            array(
                'id' => '1',
                'name' => $this->l('Before carriers list (displayBeforeCarrier)')
            ),
            array(
                'id' => '2',
                'name' => $this->l('Shopping cart (displayShoppingCart)')
            ),
            array(
                'id' => '3',
                'name' => $this->l('Customer account registration (additionalCustomerFormFields)')
            ),
            array(
                'id' => '4',
                'name' => $this->l('Custom hook position (displayPdCeneoZaufaneOpinieCustom)')
            ),
        );

        $fields_form_1 = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Module configuration'),
                    'icon' => 'icon-cogs'
                ),
                'tabs' => array(
                    'configMain' => $this->l('Ceneo Trusted Reviews configuration'),
                    'configReviewsWidgetSlider' => $this->l('Ceneo Trusted Reviews Widget (slider)'),
                    'configReviewsWidgetEmbed' => $this->l('Ceneo Trusted Reviews Widget (embedded)'),
                    'configRecomendationsWidgetEmbed' => $this->l('Ceneo Recomendations embedded Widget'),
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Ceneo GUID (accountGuid)'),
                        'tab' => 'configMain',
                        'desc' => $this->l('You can find GUID after login to https://panel.ceneo.pl, from menu tab Opinions > Trusted Reviews program > Configuration, GUID value is writen on that page or can be found in JavaScript code in variable "accountGuid=". Example: 12602a87-rc12-190f-99bc-123ed4687cf8'),
                        'name' => 'PD_CZO_GUID',
                        'size' => 42,
                        'required' => true
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Days to send survey'),
                        'name' => 'PD_CZO_WORK_DAYS',
                        'tab' => 'configMain',
                        'desc' => $this->l('Parameter specifies the number of days to send the survey to customer email.'),
                        'options' => array(
                            'query' => $days_range_select,
                            'id' => 'id',
                            'name' => 'value'
                        )
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('When send data'),
                        'name' => 'PD_CZO_WORK_MODE',
                        'tab' => 'configMain',
                        'class' => 'fixed-width-xxl fixed-width-xxxl',
                        'desc' => $this->l('Please select when You want to send data about order to ceneo'),
                        'options' => array(
                            'query' => $this->ps_version_16 ? $options_work_mode_16 : $options_work_mode_17,
                            'id' => 'id',
                            'name' => 'name',
                        )
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Agreeing form display possition'),
                        'name' => 'PD_CZO_FORM_HOOK',
                        'tab' => 'configMain',
                        'width' => 300,
                        'class' => 'fixed-width-xxl fixed-width-xxxl',
                        'desc' => $this->l('If agreeing form is not hidden then you can choose hook for displaying agreeing form if you choose custom hook position then please add in choosen tpl file line of code: {hook h=\'displayPdCeneoZaufaneOpinieCustom\'}'),
                        'options' => array(
                            'query' => $this->ps_version_16 ? $options_placement_16 : $options_placement_17,
                            'id' => 'id',
                            'name' => 'name',
                        )
                    ),
                    array(
                        'type' => $switch,
                        'label' => $this->l('Customer by default agree to send survey'),
                        'class' => 't',
                        'name' => 'PD_CZO_ACCEPTED',
                        'tab' => 'configMain',
                        'desc' => $this->l('Possibility to select checkbox by default agree to send survey to customer'),
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
                        'type' => $switch,
                        'label' => $this->l('Hide agreeing form'),
                        'class' => 't',
                        'name' => 'PD_CZO_HIDE_CONFIRM',
                        'tab' => 'configMain',
                        'desc' => $this->l('Hide possibility to agree by customer to send survey'),
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
                        'type' => $switch,
                        'label' => $this->l('Display only checkbox'),
                        'class' => 't',
                        'name' => 'PD_CZO_DISPLAY_ONLY_CHECKBOX',
                        'tab' => 'configMain',
                        'desc' => $this->l('When enabled agreing form will be displayed as checkbox only with label, else displayed as box with title / heading'),
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
                        'type' => $switch,
                        'label' => $this->l('Show widget'),
                        'class' => 't',
                        'tab' => 'configReviewsWidgetSlider',
                        'name' => 'PD_CZO_WIDGET',
                        'desc' => $this->l('Widget configuration is available trought Ceneo customer panel which can be fund at https://panel.ceneo.pl tab Shop promotions > Opinions Widget > Instalation and configuration'),
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
                        'type' => $switch,
                        'label' => $this->l('Show widget'),
                        'class' => 't',
                        'name' => 'PD_CZO_WIDGET_EMBED',
                        'tab' => 'configReviewsWidgetEmbed',
                        'desc' => $this->l('Widget configuration is available trought Ceneo customer panel which can be fund at https://panel.ceneo.pl tab Shop promotions > Opinions Widget > Instalation and configuration'),
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
                        'type' => 'text',
                        'label' => $this->l('Widget Url'),
                        'desc' => $this->l('You can find it after login to https://panel.ceneo.pl panel from menu tab Shop Promotion > Recomendations > Instalation and configuration, URL value can be taken from widget code in link a href tag, as example:').' '.$widget_embed_ahref_str.' '.$this->l('where value "http://www.ceneo.pl/;11111-0v" is what you need to enter abowe field'),
                        'name' => 'PD_CZO_WIDGET_EMBED_URL',
                        'tab' => 'configReviewsWidgetEmbed',
                        'size' => 42,
                        'required' => true
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Widget position'),
                        'name' => 'PD_CZO_WIDGET_EMBED_HOOK',
                        'class' => 'fixed-width-xxl fixed-width-xxxl',
                        'tab' => 'configReviewsWidgetEmbed',
                        'desc' => $this->l('Display embeded widget left / right column or custom hook if you choose custom hook position then please add in choosen tpl file line of code: {hook h=\'displayPdCeneoZaufaneOpinieTrustedEmbededCustom\'}'),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => '0',
                                    'name' => $this->l('Right column')
                                ),
                                array(
                                    'id' => '1',
                                    'name' => $this->l('Left column')
                                ),
                                array(
                                    'id' => '2',
                                    'name' => $this->l('Custom hook position (displayPdCeneoZaufaneOpinieTrustedEmbededCustom)')
                                ),
                            ),
                            'id' => 'id',
                            'name' => 'name',
                        )
                    ),
                    array(
                        'type' => $switch,
                        'label' => $this->l('Show widget'),
                        'class' => 't',
                        'tab' => 'configRecomendationsWidgetEmbed',
                        'name' => 'PD_CZO_WIDGET_RECOM',
                        'desc' => $this->l('Enable or disble recomendation widget (embedded)'),
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
                        'type' => 'text',
                        'label' => $this->l('Widget Id'),
                        'desc' => $this->l('You can find it after login to https://panel.ceneo.pl panel from menu tab Shop Promotion > Recomendations > Instalation and configuration > Add, id key value is in JavaScript code in variable "id". Example: id="78927d18-281a-46fd-baaf-2310f949b31e"'),
                        'name' => 'PD_CZO_WIDGET_RECOM_ID',
                        'tab' => 'configRecomendationsWidgetEmbed',
                        'size' => 42,
                        'required' => true
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Widget Url'),
                        'desc' => $this->l('You can find it after login to https://panel.ceneo.pl panel from menu tab Shop Promotion > Recomendations > Instalation and configuration, URL value can be taken from recomendations widget code in link a href tag, as example:').' '.$recom_ahref_str.' '.$this->l('where value "http://www.ceneo.pl/;11111-0v" is what you need to enter abowe field'),
                        'name' => 'PD_CZO_WIDGET_RECOM_URL',
                        'tab' => 'configRecomendationsWidgetEmbed',
                        'size' => 42,
                        'required' => true
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Widget position'),
                        'name' => 'PD_CZO_WIDGET_RECOM_HOOK',
                        'class' => 'fixed-width-xxl fixed-width-xxxl',
                        'tab' => 'configRecomendationsWidgetEmbed',
                        'desc' => $this->l('Display widget left / right column or product footer hook'),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => '0',
                                    'name' => $this->l('Right column')
                                ),
                                array(
                                    'id' => '1',
                                    'name' => $this->l('Left column')
                                ),
                                array(
                                    'id' => '2',
                                    'name' => $this->l('ProductFooter')
                                ),
                            ),
                            'id' => 'id',
                            'name' => 'name',
                        )
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save settings'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->module = $this;
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form_1));
    }

    public function getConfigFormValues()
    {
        $return = array();

        $return['PD_CZO_GUID'] = Tools::getValue('PD_CZO_GUID', Configuration::get('PD_CZO_GUID'));
        $return['PD_CZO_WORK_DAYS'] = Tools::getValue('PD_CZO_WORK_DAYS', Configuration::get('PD_CZO_WORK_DAYS'));
        $return['PD_CZO_ACCEPTED'] = Tools::getValue('PD_CZO_ACCEPTED', Configuration::get('PD_CZO_ACCEPTED'));
        $return['PD_CZO_WIDGET'] = Tools::getValue('PD_CZO_WIDGET', Configuration::get('PD_CZO_WIDGET'));
        $return['PD_CZO_WIDGET_EMBED'] = Tools::getValue('PD_CZO_WIDGET_EMBED', Configuration::get('PD_CZO_WIDGET_EMBED'));
        $return['PD_CZO_WIDGET_EMBED_URL'] = Tools::getValue('PD_CZO_WIDGET_EMBED_URL', Configuration::get('PD_CZO_WIDGET_EMBED_URL'));
        $return['PD_CZO_WIDGET_EMBED_HOOK'] = Tools::getValue('PD_CZO_WIDGET_EMBED_HOOK', Configuration::get('PD_CZO_WIDGET_EMBED_HOOK'));
        $return['PD_CZO_WIDGET_RECOM'] = Tools::getValue('PD_CZO_WIDGET_RECOM', Configuration::get('PD_CZO_WIDGET_RECOM'));
        $return['PD_CZO_WIDGET_RECOM_ID'] = Tools::getValue('PD_CZO_WIDGET_RECOM_ID', Configuration::get('PD_CZO_WIDGET_RECOM_ID'));
        $return['PD_CZO_WIDGET_RECOM_URL'] = Tools::getValue('PD_CZO_WIDGET_RECOM_URL', Configuration::get('PD_CZO_WIDGET_RECOM_URL'));
        $return['PD_CZO_WIDGET_RECOM_HOOK'] = Tools::getValue('PD_CZO_WIDGET_RECOM_HOOK', Configuration::get('PD_CZO_WIDGET_RECOM_HOOK'));
        $return['PD_CZO_HIDE_CONFIRM'] = Tools::getValue('PD_CZO_HIDE_CONFIRM', Configuration::get('PD_CZO_HIDE_CONFIRM'));
        $return['PD_CZO_FORM_HOOK'] = Tools::getValue('PD_CZO_FORM_HOOK', Configuration::get('PD_CZO_FORM_HOOK'));
        $return['PD_CZO_WORK_MODE'] = Tools::getValue('PD_CZO_WORK_MODE', Configuration::get('PD_CZO_WORK_MODE'));
        $return['PD_CZO_DISPLAY_ONLY_CHECKBOX'] = Tools::getValue('PD_CZO_DISPLAY_ONLY_CHECKBOX', Configuration::get('PD_CZO_DISPLAY_ONLY_CHECKBOX'));
        return $return;
    }

    public function hookdisplayBackOfficeHeader($params)
    {
        $configure = Tools::getValue('configure');
        if ($configure == 'pdceneozaufaneopiniepro') {
            $this->context->controller->addCSS(($this->_path).'views/css/pdceneozaufaneopiniepro_admin.css', 'all');
        }
    }

    public function hookHeader($params)
    {
        Media::addJsDef(array(
            'pdceneozaufaneopiniepro_default_accepted' => (int)$this->opinie_default_accepted,
            'pdceneozaufaneopiniepro_work_mode' => (int)$this->opinie_work_mode,
            'pdceneozaufaneopiniepro_secure_key' => $this->secure_key,
            'pdceneozaufaneopiniepro_ps16' => $this->ps_version_16,
            'pdceneozaufaneopiniepro_ps17' => $this->ps_version_17,
            'pdceneozaufaneopiniepro_ajax_link' => $this->context->link->getModuleLink('pdceneozaufaneopiniepro', 'ajax', array())
        ));

        if ($this->ps_version_16) {
            $this->context->controller->addCSS($this->_path.'views/css/pdceneozaufaneopiniepro_ps16.css', 'all');
            $this->context->controller->addJS($this->_path.'views/js/pdceneozaufaneopiniepro.js');
        } elseif ($this->ps_version_17) {
            $this->context->controller->registerStylesheet('modules-pdceneozaufaneopiniepro-front', 'modules/'.$this->name.'/views/css/pdceneozaufaneopiniepro_ps17.css', array('media' => 'all', 'priority' => 150));
            $this->context->controller->registerJavascript('modules-pdceneozaufaneopiniepro-front', 'modules/'.$this->name.'/views/js/pdceneozaufaneopiniepro.js', array('position' => 'bottom', 'priority' => 150));
        }
    }

    public function hookAdditionalCustomerFormFields($params)
    {
        if (!$this->opinie_hide_confirm
            && $this->opinie_form_hook == 3
            && $this->ps_version_17) {
            $this->storeDefaultEntryOnLoad();
            $label = sprintf(
                $this->l(
                'Acceptance of participation in the Ceneo Trusted Reviews %1$s In order to send electronically examining customer satisfaction surveys with their purchases in the store under the "Trusted Reviews" I consent to the transfer of my personal data to Ceneo Sp.z.o.o %2$s'
            ),
                '<br><em>',
                '</em>'
            );
            $formField = (new FormField())
                ->setName('pdceneozaufaneopiniepro_accept')
                ->setType('checkbox')
                ->setLabel($label)
                ->setRequired(false);
            return array($formField);
        } else {
            return array();
        }
    }

    public function hookActionBeforeSubmitAccount($params)
    {
        if (!$this->opinie_hide_confirm
            && $this->opinie_form_hook == 3
            && $this->ps_version_17) {
            if (isset($this->context->cart->id)) {
                $id_cart = (int)$this->context->cart->id;
                $id_customer = (int)$this->context->cart->id_customer;
                $accepted = Tools::getValue('pdceneozaufaneopiniepro_accept');
                $this->addOrUpdateDbEntry($id_cart, 0, $id_customer, $accepted, 0);
            }
        }
        return true;
    }

    public function hookDisplayAdminOrderSide($params)
    {
        if (!isset($params['id_order'])) {
            return;
        }

        $id_order = $params['id_order'];
        $order = new Order((int)$id_order);
        $data = new PdCeneoZaufaneOpinieProModel($order->id_cart);

        if ($data && isset($data->id_cart)) {
            $this->smarty->assign(array(
                'work_mode' => $this->opinie_work_mode,
                'data' => $data
            ));
            return $this->display(__FILE__, 'displayAdminOrderSide.tpl');
        }
    }

    public function hookDisplayAdminOrder($params)
    {
        if (!isset($params['id_order'])) {
            return;
        }

        if (!$this->ps_version_1770_lte) {
            return;
        }

        $id_order = $params['id_order'];
        $order = new Order((int)$id_order);
        $data = new PdCeneoZaufaneOpinieProModel($order->id_cart);
        if ($data && isset($data->id_cart)) {
            $this->smarty->assign(array(
                'work_mode' => $this->opinie_work_mode,
                'data' => $data,
                'logo' => ($this->_path).'views/img/icon.gif',
                'ps_version_16' => $this->ps_version_16,
                'ps_version_17' => $this->ps_version_17
            ));
            return $this->display(__FILE__, 'displayAdminOrder.tpl');
        }
    }

    public function hookTop($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        if ($this->opinie_widget) {
            $this->smarty->assign(array(
                'ceneo_account_guid' => $this->opinie_ceneo_account_guid
            ));
            return $this->display(__FILE__, 'displayTopWidgedSlider.tpl');
        }
    }

    public function hookDisplayPdCeneoZaufaneOpinieTrustedEmbededCustom($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        if ($this->opinie_widget_embed
            && $this->opinie_widget_embed_hook == 2) {
            $this->smarty->assign(array(
                'ceneo_account_guid' => $this->opinie_ceneo_account_guid
            ));
            return $this->display(__FILE__, 'customHookWidgetEmbed.tpl');
        }
    }

    public function hookRightColumn($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        $ret = '';
        if ($this->opinie_widget_embed
            && $this->opinie_widget_embed_hook == 0) {
            $this->smarty->assign(array(
                'ceneo_account_guid' => $this->opinie_ceneo_account_guid,
                'ceneo_widget_embed_url' => $this->opinie_widget_embed_url
            ));
            $ret .= $this->display(__FILE__, 'displayLeftRightWidgetEmbed.tpl');
        }

        if ($this->opinie_widget_recom_hook == 0
            && $this->opinie_widget_id
            && $this->opinie_widget_recom) {
            $this->smarty->assign(array(
                'ceneo_account_guid' => $this->opinie_ceneo_account_guid,
                'ceneo_widget_id' => $this->opinie_widget_id,
                'ceneo_widget_url' => $this->opinie_widget_url
            ));
            $ret .= $this->display(__FILE__, 'displayLeftRightRecomendations.tpl');
        }
        return $ret;
    }

    public function hookLeftColumn($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        $ret =  '';
        if ($this->opinie_widget_embed
            && $this->opinie_widget_embed_hook) {
            $this->smarty->assign(array(
                'ceneo_account_guid' => $this->opinie_ceneo_account_guid,
                'ceneo_widget_embed_url' => $this->opinie_widget_embed_url
            ));
            $ret .= $this->display(__FILE__, 'displayLeftRightWidgetEmbed.tpl');
        }
        if ($this->opinie_widget_recom_hook
            && $this->opinie_widget_id
            && $this->opinie_widget_recom) {
            $this->smarty->assign(array(
                'ceneo_account_guid' => $this->opinie_ceneo_account_guid,
                'ceneo_widget_id' => $this->opinie_widget_id,
                'ceneo_widget_url' => $this->opinie_widget_url
            ));
            $ret .= $this->display(__FILE__, 'displayLeftRightRecomendations.tpl');
        }
        return $ret;
    }

    public function hookProductFooter($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        if ($this->opinie_widget_recom_hook == 2
            && $this->opinie_widget_id
            && $this->opinie_widget_recom) {
            $this->smarty->assign(array(
                'ceneo_account_guid' => $this->opinie_ceneo_account_guid,
                'ceneo_widget_id' => $this->opinie_widget_id,
                'ceneo_widget_url' => $this->opinie_widget_url
            ));
            return $this->display(__FILE__, 'displayProductFooterRecomendations.tpl');
        }
    }
    public function hookBeforeCarrier($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        $this->storeDefaultEntryOnLoad();
        if (!$this->opinie_hide_confirm
            && $this->opinie_form_hook == 1) {
            $this->smarty->assign(array(
                'pd_word_mode' => $this->opinie_work_mode,
                'pd_accepted' => $this->getAcceptedValueByCart(),
                'only_checkbox' => $this->opinie_only_checkbox,
                'ps_version_16' => $this->ps_version_16,
                'ps_version_17' => $this->ps_version_17
            ));
            return $this->display(__FILE__, 'beforeCarrier.tpl');
        }
    }

    public function hookShoppingCart($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        $this->storeDefaultEntryOnLoad();
        if (!$this->opinie_hide_confirm
            && $this->opinie_form_hook == 2) {
            $this->smarty->assign(array(
                'pd_word_mode' => $this->opinie_work_mode,
                'pd_accepted' => $this->getAcceptedValueByCart(),
                'only_checkbox' => $this->opinie_only_checkbox,
                'ps_version_16' => $this->ps_version_16,
                'ps_version_17' => $this->ps_version_17
            ));
            return $this->display(__FILE__, 'shoppingCart.tpl');
        }
    }

    public function hookdisplayPdCeneoZaufaneOpinieCustom($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        $this->storeDefaultEntryOnLoad();
        if (!$this->opinie_hide_confirm
            && $this->opinie_form_hook == 4) {
            $this->smarty->assign(array(
                'pd_word_mode' => $this->opinie_work_mode,
                'pd_accepted' => $this->getAcceptedValueByCart(),
                'only_checkbox' => $this->opinie_only_checkbox,
                'ps_version_16' => $this->ps_version_16,
                'ps_version_17' => $this->ps_version_17
            ));
            return $this->display(__FILE__, 'customHook.tpl');
        }
    }

    public function hookDisplayPaymentTop($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        if ($this->opinie_work_mode == 1) {
            $this->storeDefaultEntryOnLoad();
            if ($this->ps_version_17) {
                return $this->display(__FILE__, 'displayPaymentTop.tpl');
            } else {
                $return = $this->display(__FILE__, 'displayPaymentTop.tpl');
                $return .= $this->processHookExecWithCart($params);
                return $return;
            }
        }
    }

    public function hookDisplayOrderDetail($params)
    {
        if ($this->opinie_work_mode == 2) {
            return $this->processHookExecWithOrder($params);
        }
    }

    public function hookOrderConfirmation($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        if ($this->opinie_work_mode == 2) {
            return $this->processHookExecWithOrder($params);
        }
    }

    public function hookdisplayBeforeBodyClosingTag($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        $ret = '';
        if ($this->opinie_work_mode == 2) {
            $ret .= $this->processHookExecWithOrder($params);
        }
        $ret .= $this->processHookExecWithCustomerAsFailover($params);
        return $ret;
    }

    public function hookFooter($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        $ret = '';
        if ($this->opinie_work_mode == 2) {
            $ret .= $this->processHookExecWithOrder($params);
        }
        $ret .= $this->processHookExecWithCustomerAsFailover($params);
        return $ret;
    }
    
    public function hookActionObjectOrderAddAfter($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return '';
        }
        $order = isset($params['object']) ? $params['object'] : false;
        $accepted = PdCeneoZaufaneOpinieProModel::getAcceptedValueByIdOrder($order->id);
        if ($order && Validate::isLoadedObject($order)) {
        	if ($accepted != 2) {
	            if ($accepted == 1) {
	                $this->addOrUpdateDbEntry((int)$order->id_cart, (int)$order->id, (int)$order->id_customer, 1, '');
	            } else {
	                $this->addOrUpdateDbEntry((int)$order->id_cart, (int)$order->id, (int)$order->id_customer, 0, '');
	            }
	        }
        }
    }

    public function storeDefaultEntryOnLoad()
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        $id_customer = '';
        if (isset($this->context->customer->id)) {
            $id_customer = (int)$this->context->customer->id;
        }

        if (isset($this->context->cart->id)) {
            $id_cart = (int)$this->context->cart->id;
            if (is_numeric($id_cart)) {
	            $accepted = PdCeneoZaufaneOpinieProModel::getAcceptedValueByIdCart($id_cart);

	            if ($accepted != 2) {
	                if ($accepted == 1) {
	                    $this->addOrUpdateDbEntry($id_cart, 0, $id_customer, 1, 0);
	                } else {
	                    $this->addOrUpdateDbEntry($id_cart, 0, $id_customer, 0, 0);
	                }
	            } else {
	            	if ($this->opinie_default_accepted) {
	                    $this->addOrUpdateDbEntry($id_cart, 0, $id_customer, 1, 0);
	                } else {
	                    $this->addOrUpdateDbEntry($id_cart, 0, $id_customer, 0, 0);
	                }
	            }
	        }
        }
    }

    public function getAcceptedValueByCart($id_cart = false)
    {
        $accepted = false;
        if (!$id_cart && isset($this->context->cart->id)) {
            $id_cart = (int)$this->context->cart->id;
        }
        if ($id_cart) {
            $res = PdCeneoZaufaneOpinieProModel::getAcceptedValueByIdCart($id_cart);
            if ($res == 1) {
                $accepted = true;
            } elseif ($res == 0) {
                $accepted = false;
            }
        }
        return $accepted;
    }

    public function actionAjaxGenerateScript($id_cart, $accepted = '')
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }
        if ($this->opinie_work_mode == 1 || $this->opinie_work_mode == 3) {
            if (isset($this->context->cart->id)) {
                $cart = $this->context->cart;
                $id_cart = (int)$this->context->cart->id;
                $id_customer = (int)$this->context->cart->id_customer;
            } else {
                $cart = new Cart($id_cart);
                if ($cart instanceof Cart) {
                    $id_cart = (int)$cart->id;
                    $id_customer = (int)$cart->id_customer;
                }
            }

            if (!$id_cart) {
                return;
            }

            $need_to_send = PdCeneoZaufaneOpinieProModel::getNeedToSendByIdCart($id_cart);
            if (!$need_to_send) {
                return;
            }
            if (empty($accepted)) {
                $accepted = $this->getAcceptedValueByCart($id_cart);
            }
            $order_reference = $id_cart;
            $amount = number_format($cart->getOrderTotal(true), 2, '.', '');
            $email = $this->getCustomerEmailById($id_customer);
            foreach ($cart->getProducts() as $p) {
                for ($i = 0; $i < $p['cart_quantity']; $i++) {
                    $product_ids[] = (isset($p['reference']) && $p['reference'] !== '') ? $p['reference'] : $p['id_product'];
                }
            }

            $this->addOrUpdateDbEntry($id_cart, '', $id_customer, $accepted, 1);
            if ($accepted) {
                return $this->generateCeneoJavaScript($order_reference, $product_ids, $email);
            } else {
                return $this->generateCeneoJavaScript($order_reference, $product_ids);
            }
        }
    }

    public function processHookExecWithOrder($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }

        $order = false;
        $id_cart = false;
        $id_order = false;
        $id_customer = false;

        if (isset($params['objOrder'])) {
            $order = $params['objOrder'];
            if ($order instanceof Order) {
                $id_cart = (int)$order->id_cart;
                $id_order = (int)$order->id;
                $id_customer = (int)$order->id_customer;
            }
        } elseif (isset($params['order'])) {
            $order = $params['order'];
            if ($order instanceof Order) {
                $id_cart = (int)$order->id_cart;
                $id_order = (int)$order->id;
                $id_customer = (int)$order->id_customer;
            }
        } elseif (Tools::getValue('id_order') && is_numeric(Tools::getValue('id_order'))) {
            $id_order_post = (int)Tools::getValue('id_order');
            $order = new Order($id_order_post);
            if ($order instanceof Order) {
                $id_cart = (int)$order->id_cart;
                $id_order = (int)$order->id;
                $id_customer = (int)$order->id_customer;
            }
        } elseif (Tools::getValue('id') && is_numeric(Tools::getValue('id'))) {
            $id_order_post = Tools::getValue('id');
            $id_order_post = (int)strstr($id_order_post, '-', true);
            $order = new Order($id_order);
            if ($order instanceof Order) {
                $id_cart = (int)$order->id_cart;
                $id_order = (int)$order->id;
                $id_customer = (int)$order->id_customer;
            }
        } elseif (Tools::getValue('id_cart') && is_numeric(Tools::getValue('id_cart'))) {
            $id_cart_post = (int)Tools::getValue('id_cart');
            $id_order = Order::getOrderByCartId($id_cart_post);
            if ($id_order) {
                $order = new Order($id_order);
                if ($order instanceof Order) {
                    $id_customer = (int)$order->id_customer;
                    $id_cart = (int)$order->id_cart;
                    $id_order = (int)$order->id;
                }
            }
        }
        
        if ($id_cart && !$id_order) {
            $id_order = Order::getOrderByCartId($id_cart);
        }

        if (!$order && $id_order) {
            $order = new Order($id_order);
            if ($order instanceof Order) {
                $id_customer = (int)$order->id_customer;
                $id_cart = (int)$order->id_cart;
                $id_order = (int)$order->id;
            }
        }

        $email = '';
        $need_to_send = false;
        $accepted = false;
        $product_ids = array();

        if ($id_order) {
            $need_to_send = PdCeneoZaufaneOpinieProModel::getNeedToSendByIdOrder($order->id);
            if (!$need_to_send) {
                return;
            }

            $accepted = $this->getAcceptedValueByCart($id_cart);
            $order_reference = isset($order->reference) ? $order->reference : $order->id;
            $amount = number_format($order->total_paid_tax_incl, 2, '.', '');
            $email = $order->getCustomer()->email;
            foreach ($order->getProductsDetail() as $p) {
                for ($i = 0; $i < $p['product_quantity']; $i++) {
                    $product_ids[] = (isset($p['reference']) && $p['reference'] !== '') ? $p['reference'] : $p['product_id'];
                }
            }


            $this->addOrUpdateDbEntry($id_cart, $id_order, $id_customer, $accepted, 1);
            if ($accepted) {
                return $this->generateCeneoJavaScript($order_reference, $product_ids, $email);
            } else {
                return $this->generateCeneoJavaScript($order_reference, $product_ids);
            }
        }
    }

    public function processHookExecWithCustomerAsFailover($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }

        $order = false;
        $id_order = false;
        $id_cart = false;
        $id_customer = false;

        if (isset($this->context->customer->id)) {
            $id_order = PdCeneoZaufaneOpinieProModel::getIdOrderByIdCustomer($this->context->customer->id);
            if ($id_order) {
                $order = new Order($id_order);
                if ($order instanceof Order) {
                    $id_cart = (int)$order->id_cart;
                    $id_order = (int)$order->id;
                    $id_customer = (int)$order->id_customer;
                }
            }
        }

        if ($id_order) {
            $email = '';
            $need_to_send = false;
            $accepted = false;
            $product_ids = array();

            $need_to_send = PdCeneoZaufaneOpinieProModel::getNeedToSendByIdOrder($id_order);
            if (!$need_to_send) {
                return;
            }

            $accepted = $this->getAcceptedValueByCart($id_cart);
            $order_reference = isset($order->reference) ? $order->reference : $id_order;
            $amount = number_format($order->total_paid_tax_incl, 2, '.', '');
            $email = $order->getCustomer()->email;
            foreach ($order->getProductsDetail() as $p) {
                for ($i = 0; $i < $p['product_quantity']; $i++) {
                    $product_ids[] = (isset($p['reference']) && $p['reference'] !== '') ? $p['reference'] : $p['product_id'];
                }
            }

            $this->addOrUpdateDbEntry($id_cart, $id_order, $id_customer, $accepted, 1);
            if ($accepted) {
                return $this->generateCeneoJavaScript($order_reference, $product_ids, $email);
            } else {
                return $this->generateCeneoJavaScript($order_reference, $product_ids);
            }
        }
    }

    public function processHookExecWithCart($params)
    {
        if (!$this->opinie_ceneo_account_guid) {
            return;
        }

        $cart = false;
        $id_cart = false;
        $id_customer = false;
        if (isset($this->context->cart->id)) {
            $id_cart = (int)$this->context->cart->id;
            $id_customer = (int)$this->context->cart->id_customer;
            $cart = $this->context->cart;
        }

        if (!$id_cart) {
            if (Tools::getValue('id_cart') && is_numeric(Tools::getValue('id_cart'))) {
                $id_cart_post = (int)Tools::getValue('id_cart');
                $cart = new Cart($id_cart_post);
                if ($cart instanceof Cart) {
                    $id_cart = (int)$cart->id;
                    $id_customer = (int)$cart->id_customer;
                }
            }
        }

        if (!$cart && $id_cart) {
            $cart = new Cart($id_cart);
            if (!$cart instanceof Cart) {
                return;
            }
        }

        $email = '';
        $need_to_send = false;
        $accepted = false;
        $product_ids = array();

        if ($id_cart) {
            $need_to_send = PdCeneoZaufaneOpinieProModel::getNeedToSendByIdCart($id_cart);
            if (!$need_to_send) {
                return;
            }
            $accepted = $this->getAcceptedValueByCart($id_cart);
            $order_reference = $id_cart;
            $amount = number_format($cart->getOrderTotal(true), 2, '.', '');
            $email = $this->getCustomerEmailById($id_customer);
            foreach ($cart->getProducts() as $p) {
                for ($i = 0; $i < $p['cart_quantity']; $i++) {
                    $product_ids[] = (isset($p['reference']) && $p['reference'] !== '') ? $p['reference'] : $p['id_product'];
                }
            }

            $this->addOrUpdateDbEntry($id_cart, 0, $id_customer, $accepted, 1);
            if ($accepted) {
                return $this->generateCeneoJavaScript($order_reference, $product_ids, $email);
            } else {
                return $this->generateCeneoJavaScript($order_reference, $product_ids);
            }
        }
    }

    public function addOrUpdateDbEntry($id_cart, $id_order = 0, $id_customer = 0, $accepted = '', $send = '')
    {
        if (isset($this->context->customer->id)&& !$id_customer) {
            $id_customer = (int)$this->context->customer->id;
        }

        $obj = new PdCeneoZaufaneOpinieProModel($id_cart);
        if ($obj instanceof PdCeneoZaufaneOpinieProModel && $obj->id) {
            $obj->id_cart = (int)$id_cart;
            $obj->id_order = $id_order ? (int)$id_order : '';
            $obj->id_customer = $id_customer ? (int)$id_customer : '';
            $obj->days_to_send = (int)$this->opinie_work_days;
            $obj->send_type =(int)$this->opinie_work_mode;
            $obj->date_upd = date('Y-m-d H:i:s');
            $obj->accepted = $accepted ? boolval($accepted) : 0;

            if ($obj->send) { // no need to chnage if already send
                $obj->send = 1;
            } else {
                $obj->send = !empty($send) ? boolval($send) : '';
            }
            return $obj->update();

        } else {

            $obj->id_cart = (int)$id_cart;
            $obj->id_order = $id_order ? (int)$id_order : '';
            $obj->id_customer = $id_customer ? (int)$id_customer : '';
            $obj->days_to_send = (int)$this->opinie_work_days;
            $obj->send_type = (int)$this->opinie_work_mode;
            $obj->accepted = $accepted ? boolval($accepted) : 0;

            $obj->send = !empty($send) ? boolval($send) : '';
            $obj->date_add = date('Y-m-d H:i:s');
            $obj->date_upd = '0000-00-00 00:00:00';

            return $obj->add();
        }
        return false;
    }

    public function generateCeneoJavaScript($order_reference, $products_ids, $email = '')
    {
        $product_ids_string = '';
        if (is_array($products_ids)) {
            $product_ids_string = sprintf('#%s#', implode('#', $products_ids));
        }

        $script_html = '
        <script type="text/javascript">
        <!--
            ceneo_client_email = \''.$email.'\';
            ceneo_order_id = \''.$order_reference.'\';';

        if ($product_ids_string != '') {
            $script_html .= '
            ceneo_shop_product_ids = \''.$product_ids_string.'\';';
        }

        if ($this->opinie_work_days != null) {
            $script_html .= '
            ceneo_work_days_to_send_questionnaire = \''.(int)$this->opinie_work_days.'\';';
        }

        $script_html .= '
        //-->
        </script>
        <script type="text/javascript" src="'.(string)$this->ceneo_url.'"></script>';

        return $script_html;
    }


    public function getCustomerEmailById($id_customer)
    {
        $sql = 'SELECT `email`
            FROM `' . _DB_PREFIX_ . 'customer`
            WHERE `id_customer` = '.(int)$id_customer.
            Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
        return Db::getInstance()->getValue($sql);
    }
}
