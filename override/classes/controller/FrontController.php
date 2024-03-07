<?php 




class FrontController extends FrontControllerCore
{
     /**
     * Sets controller CSS and JS files.
     *
     * @return bool
     */
    public function setMedia()
    {
        $this->registerStylesheet('main', '/assets/css/main.css', ['media' => 'all', 'priority' => 1010]);
        $this->registerStylesheet('theme-main', '/assets/css/theme.css', ['media' => 'all', 'priority' => 50]);
        $this->registerStylesheet('theme-custom', '/assets/css/custom.css', ['media' => 'all', 'priority' => 1000]);

        if ($this->context->language->is_rtl) {
            $this->registerStylesheet('theme-rtl', '/assets/css/rtl.css', ['media' => 'all', 'priority' => 900]);
        }

        $this->registerJavascript('corejs', '/themes/core.js', ['position' => 'bottom', 'priority' => 0]);
        $this->registerJavascript('theme-main', '/assets/js/theme.js', ['position' => 'bottom', 'priority' => 50]);
        $this->registerJavascript('theme-custom', '/assets/js/custom.js', ['position' => 'bottom', 'priority' => 1000]);

        $assets = $this->context->shop->theme->getPageSpecificAssets($this->php_self);
        if (!empty($assets)) {
            foreach ($assets['css'] as $css) {
                $this->registerStylesheet($css['id'], $css['path'], $css);
            }
            foreach ($assets['js'] as $js) {
                $this->registerJavascript($js['id'], $js['path'], $js);
            }
        }

        // Execute Hook FrontController SetMedia
        Hook::exec('actionFrontControllerSetMedia', []);

        return true;
    }

    public function getTemplateVarShop()
    {
        $address = $this->context->shop->getAddress();

        $urls = $this->getTemplateVarUrls();
        $psImageUrl = $urls['img_ps_url'] ?? _PS_IMG_;

        $shop = [
            'id' => $this->context->shop->id,
            'name' => Configuration::get('PS_SHOP_NAME'),
            'email' => Configuration::get('PS_SHOP_EMAIL'),
            'registration_number' => Configuration::get('PS_SHOP_DETAILS'),

            'long' => Configuration::get('PS_STORES_CENTER_LONG'),
            'lat' => Configuration::get('PS_STORES_CENTER_LAT'),

            'logo' => Configuration::hasKey('PS_LOGO') ? $psImageUrl . Configuration::get('PS_LOGO') : '',
            'logo_details' => $this->getShopLogo(),
            'stores_icon' => Configuration::hasKey('PS_STORES_ICON') ? $psImageUrl . Configuration::get('PS_STORES_ICON') : '',
            'favicon' => Configuration::hasKey('PS_FAVICON') ? $psImageUrl . Configuration::get('PS_FAVICON') : '',
            'favicon_update_time' => Configuration::get('PS_IMG_UPDATE_TIME'),
            'top_banner' => Configuration::get('PS_SHOP_TOP_BANNER'),
            'top_banner_mobile' => Configuration::get('PS_SHOP_TOP_BANNER_MOBILE'),
            'top_banner_link' => Configuration::get('PS_SHOP_TOP_BANNER_LINK'),
            'facebook_link' => Configuration::get('PS_SHOP_FACEBOOK_LINK'),
            'address' => [
                'formatted' => AddressFormat::generateAddress($address, [], '<br>'),
                'address1' => $address->address1,
                'address2' => $address->address2,
                'postcode' => $address->postcode,
                'city' => $address->city,
                'state' => (new State($address->id_state))->name,
                'country' => (new Country($address->id_country))->name[$this->context->language->id],
               
            ],
            'phone' => Configuration::get('PS_SHOP_PHONE'),
            'fax' => Configuration::get('PS_SHOP_FAX'),
        ];

        return $shop;
    }
}
