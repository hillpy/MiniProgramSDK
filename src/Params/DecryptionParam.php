<?php

namespace Hillpy\MiniProgramSDK\Params;

class DecryptionParam
{
    public static $decryption = [
        'decryptUserInfo' => [
            'encrypted_data' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'session_key' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'iv' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'app_id' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'raw_data' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'signature' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'decryptPhone' => [
            'encrypted_data' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'session_key' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'iv' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'app_id' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
    ];
}
