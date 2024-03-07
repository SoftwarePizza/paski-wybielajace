<?php
/**
* 2012-2021 Patryk Marek PrestaDev.pl
*
* Patryk Marek PrestaDev.pl - PD Google Dynamic Remarketing Pro 1.7.x Module © All rights reserved.
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
* @package   PD Google Dynamic Remarketing Pro 1.7.x Module
* @version   1.0.1
* @date      01-05-2021
*/

class PdGoolgeDynamicRemarketingProAjaxModuleFrontController extends ModuleFrontController
{
    private $name = '';

    public function initContent()
    {
        $this->ajax = true;
        parent::initContent();
        $this->name = 'pdgoolgedynamicremarketingpro';
    }

    public function displayAjax()
    {
        $module = new PdGoolgeDynamicRemarketingPro();

        if (Tools::getValue('secure_key') == $module->secure_key) {
            $id_product = (int)Tools::getValue('product_id');
            $id_lang = (int)Context::getContext()->language->id;
            $id_shop = (int)Context::getContext()->shop->id;
            $currency_iso = (string)$this->context->currency->iso_code;
            $action = (string)Tools::getValue('action');

            if ($action == 'updateProduct') {
                $groups = Tools::getValue('attributes_groups');
                $id_product_attribute = (int)Product::getIdProductAttributeByIdAttributes((int)$id_product, $groups);
                $product = new Product((int)$id_product, false, $id_lang);
                $content_ids = $module->getProductIdStringByType($product, $id_product_attribute);
                $price = Product::getPriceStatic($id_product, true, $id_product_attribute, 6, null, false, true);

                $data = array(
                    'conversion_id' => $module->pdgoogle_conversion_id,
                    'content_ids' => $content_ids,
                    'content_value' => Tools::ps_round($price, 2),
                );

                die(Tools::jsonEncode($data));

            } else if ($action == 'updateCart') {

                $id_product_attribute = Tools::getValue('product_id_product_attribute');
                $product = new Product((int)$id_product, false, $id_lang);
                $price = Product::getPriceStatic($id_product, true, $id_product_attribute, 6, null, false, true);
                $content_ids = $module->getProductIdStringByType($product, $id_product_attribute);

                $data = array(
                    'conversion_id' => $module->pdgoogle_conversion_id,
                    'content_ids' => $content_ids,
                    'content_value' => Tools::ps_round($price, 2)
                );

                die(Tools::jsonEncode($data));
            }
        }
    }
}
