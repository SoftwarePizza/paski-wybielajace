<?php

namespace FHB\Prestashop\Services;

final class Result
{
    const STATUS_SUCCESS = 'success';
    const STATUS_WARNING = 'warning';
    const STATUS_ERROR = 'danger';

    /** @var string */
    private $status;

    /** @var string */
    private $message;

    public function __construct($message, $status)
    {
    	$this->status = $status;
    	$this->message = $message;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return bool
     */
    public function isError()
    {
        return $this->status === self::STATUS_ERROR;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->status === self::STATUS_SUCCESS;
    }

    /**
     * @return bool
     */
    public function isWarning()
    {
        return $this->status === self::STATUS_WARNING;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->message;
    }
}