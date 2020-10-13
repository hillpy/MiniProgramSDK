<?php

namespace Hillpy\MiniProgramSDK\Params;

class ServiceMarketParam
{
    public static $serviceMarket = [
        'invokeService' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'service' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'api' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'data' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'client_msg_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
    ];
}
