<?php

namespace Hillpy\MiniProgramSDK\Params;

class DecryptionParam
{
    public static $decryption = [
        'decryptUserInfo' => [
            'code' => '',
            'encrypted_data' => '',
            'session_key' => '',
            'iv' => '',
            'app_id' => '',
            'raw_data' => '',
            'signature' => '',
        ],
        'decryptPhone' => [
            'code' => '',
            'encrypted_data' => '',
            'session_key' => '',
            'iv' => '',
            'app_id' => '',
        ],
    ];
}
