<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

if (!extension_loaded('ionCube Loader')) {
    $errors[] = '<b>x13popup</b> <span style="color: red;">Brak zainstalowanego rozszerzenia "<b>ionCube Loader</b>" na serwerze, który jest niezbędny aby korzystać z tego modułu. Jeśli chcesz korzystać z modułu i widzisz tę wiadomośc, to skontaktuj się z administratorem Twojego serwera i poproś o instalację/aktywację rozszerzenia</span>.';
} else {
    if (!defined('X13_ION_VERSION_PO')) {
        if (PHP_VERSION_ID >= 70100) {
            $x13IonVer = '-71';
        } else if (PHP_VERSION_ID >= 70000) {
            $x13IonVer = '-7';
        } else {
            $x13IonVer = '';
        }

        if (file_exists(_PS_MODULE_DIR_.'x13popup/dev')) {
            $x13IonVer = '';
            $x13IonFolder = 'php5';
        }

        define('X13_ION_VERSION_PO', $x13IonVer);
    }

    require_once _PS_MODULE_DIR_.'x13popup/x13popup.core'. X13_ION_VERSION_PO . '.php';

    class x13popup extends x13popupCore
    {
        public $html = '';

        public function __construct()
        {
            $this->name = 'x13popup';
            $this->tab = 'front_office_features';
            $this->version = '3.2.3';
            $this->author = 'X13.pl';
            $this->bootstrap = true;
            $this->need_instance = 0;
            $this->is_configurable = 1;

            parent::__construct();

            $this->displayName = $this->l('PopUP - Pop-ups manager');
            $this->description = $this->l('It enables creation and management of pop-ups - POPUPów on the website.');
            $this->ps_versions_compliancy = array('min' => '1.4', 'max' => _PS_VERSION_);
            $this->ps_version = (float) substr(_PS_VERSION_, 0, 3);

            $this->secure_key = md5($this->name._COOKIE_IV_._PS_VERSION_);

            // Retrocompatibility
            if ($this->ps_version < 1.5) {
                require_once _PS_MODULE_DIR_.'/x13popup/helpers.1.4/helper_form.php';
                require_once _PS_MODULE_DIR_.'/x13popup/helpers.1.4/helper_list.php';
                require_once _PS_MODULE_DIR_.'/x13popup/helpers.1.4/helper_option.php';
                $this->initContext();
            }
        }

        public function install()
        {
            return parent::install();
        }

        public function uninstall()
        {
            return x13popupCore::uninstallDB() && parent::uninstall();
        }

        public function hookDisplayFooter($params)
        {
            global $cookie, $context, $smarty;

            $context = Context::getContext();
            if (isset($_SERVER['HTTP_USER_AGENT'])) {
                $useragent = $_SERVER['HTTP_USER_AGENT'];
            } else {
                $useragent = false;
            }

            if ($this->ps_version < 1.5) {
                if (Tools::getIsset('id_category')) {
                    $controller_name = 'product';
                } elseif (Tools::getIsset('id_product')) {
                    $controller_name = 'category';
                } elseif (Tools::getIsset('id_cms')) {
                    $controller_name = 'cms';
                } elseif (Tools::getIsset('id_manufacturer')) {
                    $controller_name = 'manufacturer';
                } else {
                    $controller_name = 'index';
                }
            } else {
                $controller_name = $context->controller->php_self;
            }
            $id_product = $id_category = $id_cms = $id_manufacturer = $home = -1;

            if ($context->controller instanceof dotpaypaymentModuleFrontController) {
                $controller_name = 'order';
            }

            switch ($controller_name) {
                case 'product':
                    $place = 'product';
                    $place_id = (int) Tools::getValue('id_product');
                    break;
                case 'category':
                    $place = 'category';
                    $place_id = (int) Tools::getValue('id_category');
                    break;
                case 'cms':
                    $place = 'cms';
                    $place_id = (int) Tools::getValue('id_cms');
                    break;
                case 'manufacturer':
                    $place = 'manufacturer';
                    $place_id = (int) Tools::getValue('id_manufacturer', -1);
                    break;
                case 'my-account':
                    $place = 'my-account';
                    $place_id = null;
                    break;
                case 'new-products':
                    $place = 'new-products';
                    $place_id = null;
                    break;
                case 'prices-drop':
                    $place = 'prices-drop';
                    $place_id = null;
                    break;
                case 'best-sales':
                    $place = 'best-sales';
                    $place_id = null;
                    break;
                case 'order':
                case 'order-opc':
                case 'checkout':
                case 'cart':
                    $place = 'order';
                    $place_id = null;
                    break;
                case 'index':
                    $place = 'home';
                    $place_id = null;
                    break;
                default:
                    $place = null;
                    $place_id = null;
            }

            $exclude = array();
            $activePopups = array();

            $allPopups = x13popupCore::getPopupsIds();

            // Exclude already seen popups
            foreach ($allPopups as $item) {
                if (isset($_COOKIE['Prestashop-x13popup_'.(int) $item['id']])) {
                    $exclude[] = $item['id'];
                } else {
                    $activePopups[] = $item;
                }
            }

            // Exclude newsletter popups if customer is subscriber
            $visitorIsSubscribedToNewsletter = false;
            foreach ($allPopups as $key => $item) {
                if ($item['type'] == 'newsletter') {
                    if ($this->context->customer->isLogged()) {
                        if (Module::isEnabled('blocknewsletter')) {
                            $visitorIsSubscribedToNewsletter = Module::getInstanceByName('blocknewsletter')->isNewsletterRegistered($this->context->customer->email);
                        }

                        if (Module::isEnabled('ps_emailsubscription')) {
                            $visitorIsSubscribedToNewsletter = Module::getInstanceByName('ps_emailsubscription')->isNewsletterRegistered($this->context->customer->email);
                        }
                    } else {
                        if (isset($_COOKIE['Prestashop-x13popup_newsletter'])) {
                            $visitorIsSubscribedToNewsletter = true;
                        }
                    }
                }

                if ($visitorIsSubscribedToNewsletter) {
                    $exclude[] = $item['id'];
                    unset($activePopups[$key]);
                    $activePopups[] = $item;
                }
            }

            $popups = array();

            // check if we have popup for products from category
            if ((!count($popups) || !isset($popups['standard'])) && $place == 'product') {
                $categoryProductsPopups = false;
                if (count($activePopups)) {
                    foreach ($activePopups as $item) {
                        if ($item['place'] == 'category_products') {
                            $categoryProductsPopups = true;
                        }
                    }
                }

                if ($categoryProductsPopups) {
                    $place = 'category_products';
                    $productCategories = Product::getProductCategories((int) Tools::getValue('id_product'));

                    $exitPopup = x13popupCore::getPopup($place, $productCategories, $exclude, null, null, true);
                    if ($exitPopup) {
                        $popups['exit'] = $exitPopup;
                    }

                    $popup = x13popupCore::getPopup($place, $productCategories, $exclude);
                    if ($popup) {
                        $popups['standard'] = $popup;
                    }
                }
            }

            if (!isset($popups['exit'])) {
                $exitPopup = x13popupCore::getPopup($place, $place_id, $exclude, null, null, true);
                if ($exitPopup) {
                    $popups['exit'] = $exitPopup;
                }
            }

            // check if there are some http refferer popups
            $refererPopups = false;
            if (count($activePopups)) {
                foreach ($activePopups as $item) {
                    if ($item['is_referer']) {
                        $refererPopups = true;
                    }
                }
            }

            // get referer popups
            if ($refererPopups && isset($_SERVER['HTTP_REFERER']) && Validate::isUrl($_SERVER['HTTP_REFERER'])) {
                $refererPopup = x13popupCore::getPopup($place, $place_id, $exclude, null, null, false, $_SERVER['HTTP_REFERER']);
                if ($refererPopup) {
                    $popups['standard'] = $refererPopup;
                }
            }

            // proceed with a normal ones
            if (!isset($popups['standard'])) {
                $popup = x13popupCore::getPopup($place, $place_id, $exclude);
                if ($popup) {
                    $popups['standard'] = $popup;
                }
            }

            if (count($popups)) {
                foreach ($popups as $type => $popup) {
                    if (isset($_COOKIE['Prestashop-x13popup_'.(int) $popup['id_popup']])) {
                        return;
                    }

                    if (!$popup['mobile'] && (
                        preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $useragent) ||
                        preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))
                        )
                    ) {
                        return '';
                    }

                    $youtubeId = false;
                    switch ($popup['type']) {
                        case 'facebook':
                            $explode_css = explode(';', $popup['css']);
                            foreach ($explode_css as &$e_css) {
                                if ($e_css) {
                                    $e = explode(':', $e_css);
                                    $css_attr[$e[0]] = $e[1];

                                    // maximum of 500px width for facebook
                                    if ($e[0] == 'width' && $e[1] > 500) {
                                        $popup['css'] = str_replace($e_css, $e_css = $e[0].': 500px', $popup['css']);
                                    }
                                }
                            }
                            if (isset($css_attr['width'])) {
                                if ($css_attr['width'] > 500) {
                                    $css_attr['width'] = 500;
                                }
                            }
                            break;
                        case 'youtube':
                            $explode_css = explode(';', $popup['css']);
                            foreach ($explode_css as $e_css) {
                                if ($e_css) {
                                    $e = explode(':', $e_css);
                                    $css_attr[$e[0]] = preg_replace('/[^0-9]/', '', $e[1]);
                                }
                            }
                            $youtubeId = $this->getYoutubeVideoId($popup['content']);
                            break;
                        case 'newsletter':
                            if ($this->ps_version == 1.7) {
                                $smarty->assign(array(
                                    'template_path' => dirname(__FILE__).'/views/templates/front/1.7/ps_emailsubscription.tpl',
                                    'moduleUrl' => $this->context->link->getModuleLink('x13popup', 'ajax'),
                                    'moduleKey' => $this->secure_key
                                ));
                            } else {
                                $smarty->assign(array(
                                    'moduleKey' => $this->secure_key
                                ));
                                $smarty->assign('template_path', dirname(__FILE__).'/views/templates/front/blocknewsletter.tpl');
                            }
                            break;
                        default:
                            $ext_id = null;
                    }

                    $data[$type] = array(
                        'source_width' => isset($css_attr['width']) ? $css_attr['width'] : 600,
                        'source_height' => isset($css_attr['min-height']) ? $css_attr['min-height'] : 300,
                        'youtubeId' => $youtubeId,
                        'css' => $popup['css'],
                        'type' => $popup['type'],
                        'content' => $popup['content'],
                        'delay' => (int) $popup['delay'] * 1000,
                        'duration' => (int) $popup['duration'] * 1000,
                        'cookie_expired' => $popup['cookie_expired'],
                        'cookie_popup_id' => $popup['id_popup'],
                        'close_by' => $popup['close_by'],
                    );
                    $smarty->assign(array(
                        'popups' => $data,
                        'ajaxUrl' => __PS_BASE_URI__.'modules/x13popup/ajax.php',
                    ));
                }


                if ($this->ps_version == 1.7) {
                    return $this->fetch('module:x13popup/views/templates/front/1.7/x13popup.tpl');
                }

                return $this->display(__FILE__, 'views/templates/front/x13popup.tpl');
            }


            return '';
        }

        public function hookDisplayHeader($params)
        {
            if ($this->ps_version == 1.7) {
                $this->context->controller->registerStylesheet('modules-x13popup', 'modules/'.$this->name.'/views/css/x13popup.css', array('media' => 'all', 'priority' => 15));
                $this->context->controller->registerJavascript('modules-x13popup', 'modules/'.$this->name.'/views/js/x13popup.js', array('position' => 'bottom', 'priority' => 150));
            }

            if ($this->ps_version < 1.7 && $this->ps_version > 1.4) {
                $this->context->controller->addJS($this->_path.'views/js/x13popup.js');
                $this->context->controller->addCSS($this->_path.'views/css/x13popup.css');
            }
        }

        public function hookHeader()
        {
            if ($this->ps_version < 1.7) {
                Tools::addJS($this->_path.'views/js/x13popup.js');
                Tools::addCSS($this->_path.'views/css/x13popup.css');
            }
        }

        public function hookFooter($params)
        {
            return $this->hookDisplayFooter($params);
        }

        public function hookDisplayBeforeBodyClosingTag($params)
        {
            if (isset($this->context->controller->php_self) && $this->context->controller->php_self == 'order') {
                return $this->hookDisplayFooter($params);
            }
        }

        public function getErrorMessage()
        {
            return $this->l('Unable to subscribe to newsletter');
        }

        /**
         * Retrocompatibility 1.4/1.5.
         */
        private function initContext()
        {
            if (class_exists('Context')) {
                $this->context = Context::getContext();
            } else {
                global $smarty, $cookie;
                $this->context = new StdClass();
                $this->context->smarty = $smarty;
                $this->context->cookie = $cookie;
            }
        }
    }
}
