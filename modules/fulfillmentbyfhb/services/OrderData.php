<?php

namespace FHB\Prestashop\Services;

final class OrderData
{
    const NOTIFY_CONFIRMED = 'confirmed';
    const NOTIFY_SENT = 'sent';
    const NOTIFY_DELIVERED = 'delivered';
    const NOTIFY_RETURNED = 'returned';

    /** @var string */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $street;

    /** @var string */
    private $city;

    /** @var string */
    private $zip;

    /** @var string */
    private $country;

    /** @var string */
    private $email;

    /** @var string */
    private $phone;

    /** @var string */
    private $variableSymbol;

    /** @var float */
    private $cod;

    /** @var string|null */
    private $note;

    /** @var string|null */
    private $invoice;

    /** @var string|null */
    private $parcelService;

    /** @var OrderItemData[] */
    private $items = [];

    /** @var string[] */
    private $tracking = [];

    /** @var string[] */
    private $notifyLinks = [];

    public function __construct(
        $id,
        $name,
        $street,
        $city,
        $zip,
        $country,
        $email,
        $phone,
        $variableSymbol,
        $cod = 0,
        $note = null,
        $invoice = null,
        $parcelService = null,
        array $tracking = [],
        array $notifyLinks = []
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->street = $street;
        $this->city = $city;
        $this->zip = $zip;
        $this->country = $country;
        $this->email = $email;
        $this->phone = $phone;
        $this->variableSymbol = $variableSymbol;
        $this->cod = $cod;
        $this->note = $note;
        $this->invoice = $invoice;
        $this->parcelService = $parcelService;
        $this->tracking = $tracking;
        $this->notifyLinks = $notifyLinks;
    }

    /**
     * @param string $id
     * @param int $quantity
     */
    public function addItem($id, $quantity)
    {
        $this->items[] = new OrderItemData($id, $quantity);
    }

    /**
     * @param string $type
     * @param string $url
     */
    public function addNotify($type, $url)
    {
        $this->notifyLinks[$type] = $url;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getVariableSymbol()
    {
        return $this->variableSymbol;
    }

    /**
     * @return float
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * @return null|string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @return null|string
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @return OrderItemData[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return string[]
     */
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * @return string[]
     */
    public function getNotifyLinks()
    {
        return $this->notifyLinks;
    }

    /**
     * @return string|null
     */
    public function getParcelService()
    {
        return $this->parcelService;
    }
}