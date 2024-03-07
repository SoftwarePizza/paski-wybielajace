<?php

namespace FHB\Prestashop\Services;

use Kika\ApiClient\RestApi;

final class RestApiFactory
{
    public static function create()
    {
        $restApi = new RestApi(
            trim(\Configuration::get('FHB_API_APP_ID')),
            trim(\Configuration::get('FHB_API_SECRET_KEY'))
        );

        if (\Configuration::get('FHB_API_SANDBOX')) {
            $restApi->setEndpoint(\Configuration::get('FHB_API_TEST_SERVER'));
        }

        return $restApi;
    }
}