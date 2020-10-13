<?php

namespace Hillpy\MiniProgramSDK\Params;

class SoterParam
{
    public static $soter = [
        'verifySignature' => [
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
            'json_string' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'json_signature' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
    ];
}
