<?php

namespace FHB\Prestashop\Services;

final class OrderItemData
{
    /** @var string */
    private $id;

    /** @var int */
    private $quantity;

    public function __construct($id, $quantity)
    {
    	$this->id = $id;
    	$this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}