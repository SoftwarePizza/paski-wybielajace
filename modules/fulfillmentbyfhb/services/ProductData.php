<?php

namespace FHB\Prestashop\Services;

final class ProductData
{
    /** @var string */
    private $id;

    /** @var string */
    private $ean;

    /** @var string */
    private $name;

    /** @var string|null */
    private $photoUrl;

    /** @var string|null */
    private $notifyLink;

    /** @var int */
    private $stockQuantity;

    /** @var int */
    private $freeQuantity;

    public function __construct($id, $ean, $name, $photoUrl = null, $notifyLink = null, $stockQuantity = 0, $freeQuantity = 0)
    {
        $this->id = $id;
        $this->ean = $ean;
        $this->name = $name;
        $this->photoUrl = $photoUrl;
        $this->notifyLink = $notifyLink;
        $this->stockQuantity = $stockQuantity;
        $this->freeQuantity = $freeQuantity;
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
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    /**
     * @return null|string
     */
    public function getNotifyLink()
    {
        return $this->notifyLink;
    }

    /**
     * @return int
     */
    public function getStockQuantity()
    {
        return $this->stockQuantity;
    }

    /**
     * @return int
     */
    public function getFreeQuantity()
    {
        return $this->freeQuantity;
    }
}