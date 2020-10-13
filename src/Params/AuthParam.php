<?php

namespace Hillpy\MiniProgramSDK\Params;

class AuthParam
{
    public static $auth = [
        'code2Session' => [
            'appid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'secret' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'js_code' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'grant_type' => [
                'default' => 'authorization_code',
                'required' => true,
                'value' => '',
                'enum' => [
                    'authorization_code',
                ],
            ],
        ],
        'getPaidUnionId' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'openid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'transaction_id' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'mch_id' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'out_trade_no' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'getAccessToken' => [
            'grant_type' => [
                'default' => 'client_credential',
                'required' => true,
                'value' => '',
                'enum' => [
                    'client_credential',
                ],
            ],
            'appid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'secret' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
    ];
}
