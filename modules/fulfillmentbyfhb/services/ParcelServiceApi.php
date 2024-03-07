<?php

namespace FHB\Prestashop\Services;

use Kika\ApiClient\ParcelServices;

final class ParcelServiceApi
{
    /** @var ParcelServices */
    private $parcelServices;

    public function __construct()
    {
        $this->parcelServices = new ParcelServices(RestApiFactory::create());
    }

    public function getAll()
    {
        $result = [];

        foreach ($this->parcelServices->readAll()->_embedded->services as $parcelService) {
            $result[$parcelService->code] = [
                'code' => $parcelService->code,
                'name' => $parcelService->name,
            ];
        }

        return $result;
    }
}