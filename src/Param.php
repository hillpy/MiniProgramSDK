<?php

namespace Hillpy\MiniProgramSDK;

class Param
{
    public static $auth = [
        'code2Session' => [
            'appid' => '',
            'secret' => '',
            'js_code' => '',
            'grant_type' => 'authorization_code',
        ],
        'getAccessToken' => [
            'grant_type' => 'client_credential',
            'appid' => '',
            'secret' => '',
        ],
    ];
}
