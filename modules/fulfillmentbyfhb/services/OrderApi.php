<?php

namespace FHB\Prestashop\Services;

use Kika\ApiClient\Orders;

final class OrderApi
{
    /** @var Orders */
    private $orders;

    public function __construct()
    {
        $this->orders = new Orders(RestApiFactory::create());
    }

    /**
     * @param string $id
     * @return OrderData|null
     * @throws \Exception
     */
    public function get($id)
    {
        try {
            $response = $this->orders->read($id);
        }
        catch (\Exception $exception) {
            if ($exception->getCode() === 404) {
                return null;
            }

            throw $exception;
        }

        $orderData = new OrderData(
            $response->id,
            $response->name,
            $response->street,
            $response->city,
            $response->psc,
            $response->country,
            $response->email,
            $response->phone,
            $response->variableSymbol,
            $response->cod,
            null,
            null,
            $response->parcelService,
            isset($response->_embedded->trackingNumber) ? $response->_embedded->trackingNumber : []
        );

        foreach ($response->_embedded->items as $item) {
            $orderData->addItem($item->id, $item->qty);
        }

        return $orderData;
    }

    /**
     * @param OrderData $orderData
     */
    public function add(OrderData $orderData)
    {
        $this->orders->create([
            'id' => $orderData->getId(),
            'name' => $orderData->getName(),
            'street' => $orderData->getStreet(),
            'city' => $orderData->getCity(),
            'psc' => $orderData->getZip(),
            'country' => $orderData->getCountry(),
            'email' => $orderData->getEmail(),
            'phone' => $orderData->getPhone(),
            'variableSymbol' => $orderData->getVariableSymbol(),
            'cod' => $orderData->getCod(),
            'note' => $orderData->getNote(),
            'invoiceLink' => $orderData->getInvoice(),
            '_embedded' => [
                'items' => array_map(function (OrderItemData $orderItemData) {
                    return [
                        'id' => $orderItemData->getId(),
                        'qty' => $orderItemData->getQuantity()
                    ];
                }, $orderData->getItems()),
                'notifyLinks' => [
                    $orderData->getNotifyLinks()
                ]
            ]
        ]);
    }

    /**
     * @param string $id
     */
    public function cancel($id)
    {
        $this->orders->delete($id);
    }
}