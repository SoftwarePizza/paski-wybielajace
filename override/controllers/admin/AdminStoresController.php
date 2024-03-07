<?php 



class AdminStoresController extends AdminStoresControllerCore
{
    protected function _getDefaultFieldsContent()
    {
        $this->context = Context::getContext();
        $countryList = [];
        $countryList[] = ['id' => '0', 'name' => $this->trans('Choose your country', [], 'Admin.Shopparameters.Feature')];
        foreach (Country::getCountries($this->context->language->id) as $country) {
            $countryList[] = ['id' => $country['id_country'], 'name' => $country['name']];
        }
        $stateList = [];
        $stateList[] = ['id' => '0', 'name' => $this->trans('Choose your state (if applicable)', [], 'Admin.Shopparameters.Feature')];
        foreach (State::getStates($this->context->language->id) as $state) {
            $stateList[] = ['id' => $state['id_state'], 'name' => $state['name']];
        }

        $formFields = [
            'PS_SHOP_NAME' => [
                'title' => $this->trans('Shop name', [], 'Admin.Shopparameters.Feature'),
                'hint' => $this->trans('Displayed in emails and page titles.', [], 'Admin.Shopparameters.Feature'),
                'validation' => 'isGenericName',
                'required' => true,
                'type' => 'text',
                'no_escape' => true,
            ],
            'PS_SHOP_EMAIL' => ['title' => $this->trans('Shop email', [], 'Admin.Shopparameters.Feature'),
                'hint' => $this->trans('Displayed in emails sent to customers.', [], 'Admin.Shopparameters.Help'),
                'validation' => 'isEmail',
                'required' => true,
                'type' => 'text',
            ],
            'PS_SHOP_DETAILS' => [
                'title' => $this->trans('Registration number', [], 'Admin.Shopparameters.Feature'),
                'hint' => $this->trans('Shop registration information (e.g. SIRET or RCS).', [], 'Admin.Shopparameters.Help'),
                'validation' => 'isGenericName',
                'type' => 'textarea',
                'cols' => 30,
                'rows' => 5,
            ],
            'PS_SHOP_ADDR1' => [
                'title' => $this->trans('Shop address line 1', [], 'Admin.Shopparameters.Feature'),
                'validation' => 'isAddress',
                'type' => 'text',
            ],
            'PS_SHOP_ADDR2' => [
                'title' => $this->trans('Shop address line 2', [], 'Admin.Shopparameters.Feature'),
                'validation' => 'isAddress',
                'type' => 'text',
            ],
            'PS_SHOP_CODE' => [
                'title' => $this->trans('Zip/Postal code', [], 'Admin.Global'),
                'validation' => 'isGenericName',
                'type' => 'text',
            ],
            'PS_SHOP_CITY' => [
                'title' => $this->trans('City', [], 'Admin.Global'),
                'validation' => 'isGenericName',
                'type' => 'text',
            ],
            'PS_SHOP_COUNTRY_ID' => [
                'title' => $this->trans('Country', [], 'Admin.Global'),
                'validation' => 'isInt',
                'type' => 'select',
                'list' => $countryList,
                'identifier' => 'id',
                'cast' => 'intval',
                'defaultValue' => (int) $this->context->country->id,
            ],
            'PS_SHOP_STATE_ID' => [
                'title' => $this->trans('State', [], 'Admin.Global'),
                'validation' => 'isInt',
                'type' => 'select',
                'list' => $stateList,
                'identifier' => 'id',
                'cast' => 'intval',
            ],
            'PS_SHOP_PHONE' => [
                'title' => $this->trans('Phone', [], 'Admin.Global'),
                'validation' => 'isGenericName',
                'type' => 'text',
            ],
            'PS_SHOP_FAX' => [
                'title' => $this->trans('Fax', [], 'Admin.Global'),
                'validation' => 'isGenericName',
                'type' => 'text',
            ],
            'PS_SHOP_TOP_BANNER' => array(
                'title' => $this->trans('Teskt na górnej belce', array(), 'Admin.Shopparameters.Feature'),
                'hint' => $this->trans('Baner wyświetlany na górnej belce w sklepie.', array(), 'Admin.Shopparameters.Help'),
                'validation' => 'isGenericName',
                'type' => 'textarea',
                'cols' => 30,
                'rows' => 5,
            ),
            'PS_SHOP_TOP_BANNER_MOBILE' => array(
                'title' => $this->trans('Teskt na górnej belce w wersji mobile', array(), 'Admin.Shopparameters.Feature'),
                'hint' => $this->trans('Baner wyświetlany na górnej belce w sklepie.', array(), 'Admin.Shopparameters.Help'),
                'validation' => 'isGenericName',
                'type' => 'textarea',
                'cols' => 30,
                'rows' => 5,
            ),
            'PS_SHOP_TOP_BANNER_LINK' => array(
                'title' => $this->trans('Link do baneru', array(), 'Admin.Shopparameters.Feature'),
                'hint' => $this->trans('Link do baneru na górnej belce', array(), 'Admin.Shopparameters.Help'),
                'validation' => 'isGenericName',
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
            ),
            'PS_SHOP_FACEBOOK_LINK' => array(
                'title' => $this->trans('Link do facebooka', array(), 'Admin.Shopparameters.Feature'),
                'hint' => $this->trans('Link do facebooka na górnej belce', array(), 'Admin.Shopparameters.Help'),
                'validation' => 'isGenericName',
                'type' => 'text',
                'cols' => 30,
                'rows' => 1,
            ),
        ];

        return $formFields;
    }
}