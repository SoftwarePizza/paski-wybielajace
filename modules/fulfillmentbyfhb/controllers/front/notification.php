<?php

require_once __DIR__ . '/../../autoload.php';

final class FulfillmentByFhbNotificationModuleFrontController extends ModuleFrontController
{
    /** @var \FHB\Prestashop\Services\OrderApi */
    private $orderApi;

    public function __construct()
    {
    	parent::__construct();
    	$this->orderApi = new \FHB\Prestashop\Services\OrderApi();
    }

    const STATUS_MAP = [
        'sent' => 'FHB_API_NOTIFICATION_SENT',
        'confirmed' => 'FHB_API_NOTIFICATION_CONFIRMED',
        'delivered' => 'FHB_API_NOTIFICATION_DELIVERED',
        'returned' => 'FHB_API_NOTIFICATION_RETURNED',
    ];

    public function initContent()
    {
        $type = isset($_GET['type']) ? $_GET['type'] : null;

        if (array_key_exists($type, self::STATUS_MAP) === false) {
            $this->badRequest('Invalid notification type');
        }

        if (empty($_GET['order'])) {
            $this->badRequest('Missing order parameter');
        }

        if (empty($_GET['token'])) {
            $this->badRequest('Missing token parameter');
        }

        try {
            $this->processNotification($type, $_GET['order'], $_GET['token']);
        }
        catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }

    private function processNotification($type, $orderReference, $token)
    {
        /** @var Order $order */
        $order = Order::getByReference($orderReference)->getFirst();

        if ($order === false || sha1($order->secure_key) !== $token) {
            $this->badRequest(
                sprintf('Order "%s" does not exists or invalid token', $_GET['order'])
            );
        }

        $targetState = Configuration::get(self::STATUS_MAP[$type]);

        if (!$targetState) {
            $this->success();
        }

        if ($type === 'sent') {
            $this->importTrackingNumber($order);
        }

        if ($order->getCurrentState() != $targetState) {
            if ($type === 'returned') {
                $orderReturn = new OrderReturn();
                $orderReturn->state = (int) $targetState;
                $orderReturn->id_order = $order->id;
                $orderReturn->id_customer = $order->id_customer;
                $orderReturn->add();
            } else {
                $order->setCurrentState($targetState);
            }
        }

        $this->success();
    }

    private function success($message = null)
    {
        header('Content-Type: application/json');
        http_response_code(200);

        echo json_encode([
            'status' => 'ok'
        ]);

        die();
    }

    private function badRequest($message)
    {
        header('Content-Type: application/json');
        http_response_code(400);

        echo json_encode([
            'status' => 'error',
            'message' => $message
        ]);

        die();
    }

    private function error($message)
    {
        header('Content-Type: application/json');
        http_response_code(500);

        echo json_encode([
            'status' => 'error',
            'message' => $message
        ]);

        die();
    }

    private function importTrackingNumber(Order $order)
    {
        $orderReference = trim(\Configuration::get('FHB_API_ORDER_ID_PREFIX') . $order->reference);
        $orderData = $this->orderApi->get($orderReference);
        $trackingNumbers = $orderData->getTracking();

        $carrier = new \OrderCarrier($order->getIdOrderCarrier());
        $carrier->tracking_number = reset($trackingNumbers);
        $carrier->save();
    }
}