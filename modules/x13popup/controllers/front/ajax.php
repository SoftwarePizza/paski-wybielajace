<?php
require_once _PS_MODULE_DIR_ . 'x13popup/x13popup.php';

class x13popupAjaxModuleFrontController extends ModuleFrontController
{
    public $newsletterModule = null;
    public function init()
    {
        parent::init();
        $this->newsletterModule = Module::getInstanceByName('ps_emailsubscription');
    }

    public function postProcess()
    {
        $honeyPotFields = ['website', 'url', 'firstname', 'lastname'];

        foreach ($honeyPotFields as $field) {
            if (Tools::getValue($field, 0)) {
                die('Access denied');
            }
        }
        
        if (Module::isEnabled('x13popup')
            && Tools::getIsset('submitNewsletter')
            && Tools::getValue('secure_key') == $this->module->secure_key) {
            $this->subscribeToNewsletter();
        } else {
            die('Access denied');
        }
    }

    public function subscribeToNewsletter()
    {
        $module = Module::getInstanceByName('ps_emailsubscription');
        $this->context->smarty->assign('urls', array('pages' => array('index' => $this->context->shop->getBaseUrl(true))));
        $result = $module->getWidgetVariables();
        
        if ($result['nw_error']) {
            $this->ajaxDie(
                json_encode(
                    array(
                        'hasError' => true,
                        'status' => 'success',
                        'message' => $result['msg']
                    )
                )
            );
        } else {
            $this->ajaxDie(
                json_encode(
                    array(
                        'hasError' => false,
                        'status' => 'success',
                        'message' => $result['msg']
                    )
                )
            );
        }

        
    }
}
