<?php

namespace FHB\Prestashop\Services;

final class OrderExport
{
    /** @var OrderApi */
    private $orderApi;

    public function __construct()
    {
        $this->orderApi = new OrderApi();
    }

    public function getExportStates()
    {
        $states = [];

        foreach (\OrderState::getOrderStates(1) as $state) {
            $key = sprintf('FHB_API_EXPORT_ORDER_STATE_%d', $state['id_order_state']);
            if (\Configuration::get($key) === '1') {
                $states[$state['id_order_state']] = $state['name'];
            }
        }

        return $states;
    }

    /**
     * @param int $stateId
     * @return int
     */
    public function countByState($stateId)
    {
        $sql = sprintf('SELECT COUNT(id_order) AS order_count FROM %sorders WHERE current_state = %d', _DB_PREFIX_, $stateId);
        return (int) \Db::getInstance()->getValue($sql);
    }

    /**
     * @param $stateId
     * @return Result[]
     * @throws \PrestaShopDatabaseException
     */
    public function exportByState($stateId)
    {
        $sql = sprintf('SELECT id_order FROM %sorders WHERE current_state = %d', _DB_PREFIX_, $stateId);
        $orders = \Db::getInstance()->executeS($sql);
        $result = [];

        foreach ($orders as $order) {
            $result[] = $this->exportOrder($order['id_order']);
        }

        return $result;
    }

    /**
     * @param $orderId
     * @return Result
     * @throws \Exception
     */
    public function exportOrder($orderId)
    {
        $order = new \Order($orderId);
        $address = new \Address($order->id_address_delivery);
        $country = new \Country($address->id_country);
        $customer = new \Customer($order->id_customer);
        $invoice = $order->getInvoicesCollection()->getFirst();
        $invoiceLink = null;

        if ($invoice) {
            $invoiceLink = \Context::getContext()->link->getModuleLink('fulfillmentbyfhb', 'invoice', ['order' => $order->reference]);
        }

        $orderApiId = trim(\Configuration::get('FHB_API_ORDER_ID_PREFIX') . $order->reference);
        $existingOrder = $this->orderApi->get($orderApiId);

        if ($existingOrder !== null) {
            return new Result(sprintf('Order %s (%d) already exported', $orderApiId, $orderId), Result::STATUS_WARNING);
        }

        $key = sprintf('FHB_API_CARRIER_%d', $order->id_carrier);
        $parcelService = \Configuration::get($key);

        $orderData = new OrderData(
            $orderApiId,
            sprintf('%s %s', $address->firstname, $address->lastname),
            implode(', ', [$address->address1, $address->address2]),
            $address->city,
            $address->postcode,
            strtolower($country->iso_code),
            $customer->email,
            $address->phone,
            $order->invoice_number,
            $this->getCod($order),
            null,
            $invoiceLink,
            $parcelService ? $parcelService : null
        );

        $orderData->addNotify(
            OrderData::NOTIFY_CONFIRMED,
            \Context::getContext()->link->getModuleLink(
                'fulfillmentbyfhb',
                'notification',
                [
                    'type' => OrderData::NOTIFY_CONFIRMED,
                    'order' => $order->reference,
                    'token' => sha1($order->secure_key)
                ]
            )
        );

        $orderData->addNotify(
            OrderData::NOTIFY_SENT,
            \Context::getContext()->link->getModuleLink(
                'fulfillmentbyfhb',
                'notification',
                [
                    'type' => OrderData::NOTIFY_SENT,
                    'order' => $order->reference,
                    'token' => sha1($order->secure_key)
                ]
            )
        );

        $orderData->addNotify(
            OrderData::NOTIFY_DELIVERED,
            \Context::getContext()->link->getModuleLink(
                'fulfillmentbyfhb',
                'notification',
                [
                    'type' => OrderData::NOTIFY_DELIVERED,
                    'order' => $order->reference,
                    'token' => sha1($order->secure_key)
                ]
            )
        );

        $orderData->addNotify(
            OrderData::NOTIFY_RETURNED,
            \Context::getContext()->link->getModuleLink(
                'fulfillmentbyfhb',
                'notification',
                [
                    'type' => OrderData::NOTIFY_RETURNED,
                    'order' => $order->reference,
                    'token' => sha1($order->secure_key)
                ]
            )
        );

        foreach ($order->getProducts() as $orderProduct) {
            $orderData->addItem($orderProduct['product_reference'], $orderProduct['product_quantity']);
        }

        try {
            $this->orderApi->add($orderData);
        }
        catch (\Exception $e) {
            return new Result(sprintf('Order %s (%s): %s', $orderApiId, $orderId, $e->getMessage()), Result::STATUS_ERROR);
        }

        return new Result(sprintf('Order %s (%d) exported', $orderApiId, $orderId), Result::STATUS_SUCCESS);
    }

    /**
     * @param int $orderId
     * @return Result
     */
    public function cancelOrder($orderId)
    {
        $order = new \Order($orderId);
        $orderApiId = trim(\Configuration::get('FHB_API_ORDER_ID_PREFIX') . $order->reference);

        try {
            $this->orderApi->cancel($orderApiId);
        }
        catch (\Exception $e) {
            return new Result(sprintf('Order %s (%s): %s', $orderApiId, $orderId, $e->getMessage()), Result::STATUS_ERROR);
        }

        return new Result(sprintf('Order %s (%d) canceled', $orderApiId, $orderId), Result::STATUS_SUCCESS);
    }

    /**
     * @param \Order $order
     * @return float
     */
    private function getCod(\Order $order)
    {
        $configKey = 'FHB_API_IS_COD_' . strtoupper($order->module);
        $isCod = \Configuration::get($configKey) === '1';

        if ($isCod === false) {
            return 0.0;
        }

        return $order->total_paid;
    }
}