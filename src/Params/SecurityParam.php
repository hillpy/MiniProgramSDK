<?php

namespace Hillpy\MiniProgramSDK\Params;

class SecurityParam
{
    public static $security = [
        'imgSecCheck' => [
            'access_token' => '',
            'media' => '',
        ],
        'mediaCheckAsync' => [
            'access_token' => '',
            'media_url' => '',
            'media_type' => '',
        ],
        'msgSecCheck' => [
            'access_token' => '',
            'content' => '',
        ],
    ];
}
