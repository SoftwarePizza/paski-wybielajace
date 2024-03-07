<?php

namespace Kika\ApiClient;


class ParcelServices
{

    /** @var RestApi */
    private $api;


    public function __construct(RestApi $api)
    {
        $this->api = $api;
    }


    public function readAll()
    {
        return $this->api->get("parcel-service");
    }

}