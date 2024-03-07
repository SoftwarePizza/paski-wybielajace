<?php

require_once __DIR__ . '/../../autoload.php';

final class AdminFulfillmentByFhbSettingsController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->bootstrap = true;
        $this->context = Context::getContext();
        $this->className = 'Configuration';
        $this->table = 'configuration';
        $orderStateList = [['id_order_state' => '', 'name' => '']] + OrderState::getOrderStates(1);
        $returnOrderStateList = [['id_order_return_state' => '', 'name' => '']] + OrderReturnState::getOrderReturnStates(1);

        $this->fields_options = array(
            'general' => array(
                'title' => $this->trans('Basic settings'),
                'icon' => 'icon-cogs',
                'fields' => array(
                    'FHB_API_APP_ID' => array(
                        'title' => $this->trans('Application ID'),
                        'cast' => 'strval',
                        'type' => 'text',
                        'class' => 'fixed-width-xxl'
                    ),
                    'FHB_API_SECRET_KEY' => array(
                        'title' => $this->trans('Secret key'),
                        'cast' => 'strval',
                        'type' => 'text',
                        'class' => 'fixed-width-xxl'
                    ),
                    'FHB_API_SANDBOX' => array(
                        'title' => $this->trans('Sandbox mode'),
                        'desc' => $this->trans('Sandbox mode uses test server'),
                        'cast' => 'strval',
                        'type' => 'bool',
                        'class' => 'fixed-width-xxl'
                    ),
                    'FHB_API_TEST_SERVER' => array(
                        'title' => $this->trans('Test server'),
                        'cast' => 'strval',
                        'type' => 'text',
                        'class' => 'fixed-width-xxl',
                    ),
                    'FHB_API_ORDER_ID_PREFIX' => array(
                        'title' => $this->trans('Order ID prefix'),
                        'desc' => $this->trans('If you use multiple e-shops, you can set up order number prefix to avoid collisions'),
                        'cast' => 'strval',
                        'type' => 'text',
                        'class' => 'fixed-width-xxl'
                    ),
                ),
                'submit' => array('title' => $this->trans('Save')),
            ),
            'export' => array(
                'title' => $this->trans('Order export'),
                'icon' => 'icon-cogs',
                'fields' => array(
                    'FHB_API_EXPORT_ORDER_AUTO' => array(
                        'title' => $this->trans('Automatic order export'),
                        'desc' => $this->trans('Orders with defined state will be automatically exported to FHB fulfillment service'),
                        'cast' => 'strval',
                        'type' => 'bool',
                        'class' => 'fixed-width-xxl'
                    )
                ),
                'submit' => array('title' => $this->trans('Save')),
            ),
            'cod' => array(
                'title' => $this->trans('Cod payment methods'),
                'icon' => 'icon-cogs',
                'fields' => array(),
                'submit' => array('title' => $this->trans('Save')),
            ),
            'order_state_change' => array(
                'title' => $this->trans('Automatic order state change'),
                'icon' => 'icon-cogs',
                'fields' => array(
                    'FHB_API_NOTIFICATION_CONFIRMED' => array(
                        'title' => $this->trans('Confirmed event'),
                        'cast' => 'strval',
                        'type' => 'select',
                        'class' => 'fixed-width-xxl',
                        'identifier' => 'id_order_state',
                        'list' => $orderStateList
                    ),
                    'FHB_API_NOTIFICATION_SENT' => array(
                        'title' => $this->trans('Sent event'),
                        'cast' => 'strval',
                        'type' => 'select',
                        'class' => 'fixed-width-xxl',
                        'identifier' => 'id_order_state',
                        'list' => $orderStateList
                    ),
                    'FHB_API_NOTIFICATION_DELIVERED' => array(
                        'title' => $this->trans('Delivered event'),
                        'cast' => 'strval',
                        'type' => 'select',
                        'class' => 'fixed-width-xxl',
                        'identifier' => 'id_order_state',
                        'list' => $orderStateList
                    ),
                    'FHB_API_NOTIFICATION_RETURNED' => array(
                        'title' => $this->trans('Returned event'),
                        'cast' => 'strval',
                        'type' => 'select',
                        'class' => 'fixed-width-xxl',
                        'identifier' => 'id_order_return_state',
                        'list' => $returnOrderStateList
                    ),
                ),
                'submit' => array('title' => $this->trans('Save')),
            ),
            'order_cancel' => array(
                'title' => $this->trans('Automatic order state change'),
                'icon' => 'icon-cogs',
                'fields' => array(
                    'FHB_API_CANCEL_ORDER_STATE' => array(
                        'title' => $this->trans('Cancel order when'),
                        'cast' => 'strval',
                        'type' => 'select',
                        'class' => 'fixed-width-xxl',
                        'identifier' => 'id_order_state',
                        'list' => $orderStateList
                    ),
                ),
                'submit' => array('title' => $this->trans('Save')),
            ),
        );

        foreach (OrderState::getOrderStates(1) as $state) {
            $key = sprintf('FHB_API_EXPORT_ORDER_STATE_%d', $state['id_order_state']);
            $this->fields_options['export']['fields'][$key] = [
                'title' => $state['name'],
                'cast' => 'strval',
                'type' => 'bool',
                'class' => 'fixed-width-xxl'
            ];
        }

        foreach (PaymentModule::getInstalledPaymentModules() as $paymentModule) {
            $this->fields_options['cod']['fields']['FHB_API_IS_COD_' . strtoupper($paymentModule['name'])] = array(
                'title' => strtoupper($paymentModule['name']),
                'cast' => 'strval',
                'type' => 'bool',
                'class' => 'fixed-width-xxl'
            );
        }

        if (\Configuration::get('FHB_API_APP_ID')) {
            try {
                $parcelServices = new \FHB\Prestashop\Services\ParcelServiceApi();
                $parcelServices = $parcelServices->getAll();
                $parcelServices = [['code' => '', 'name' => '']] + $parcelServices;

                $this->fields_options['delivery_method'] = [
                    'title' => $this->trans('Delivery methods'),
                    'icon' => 'icon-cogs',
                    'fields' => array(

                    ),
                    'submit' => array('title' => $this->trans('Save')),
                ];

                foreach (Carrier::getCarriers(1) as $carrier) {
                    $key = sprintf('FHB_API_CARRIER_%d', $carrier['id_carrier']);

                    $this->fields_options['delivery_method']['fields'][$key] = array(
                        'title' => strtoupper($carrier['name']),
                        'cast' => 'strval',
                        'type' => 'select',
                        'class' => 'fixed-width-xxl',
                        'identifier' => 'code',
                        'list' => $parcelServices
                    );
                }
            }
            catch (\Exception $exception) {}
        }
    }
}