<?php

namespace Hillpy\MiniProgramSDK\Params;

class CustomerServiceMessageParam
{
    public static $customerServiceMessage = [
        'getTempMedia' => [
            'access_token' => '',
            'media_id' => '',
        ],
        'send' => [
            'access_token' => '',
            'touser' => '',
            'msgtype' => '',
            'text' => [
                'content' => '',
            ],
            'image' => [
                'media_id' => '',
            ],
            'link' => [
                'title' => '',
                'description' => '',
                'url' => '',
                'thumb_url' => '',
            ],
            'miniprogrampage' => [
                'title' => '',
                'pagepath' => '',
                'thumb_media_id' => '',
            ],
        ],
        'setTyping' => [
            'access_token' => '',
            'touser' => '',
            'command' => '',
        ],
        'uploadTempMedia' => [
            'access_token' => '',
            'type' => '',
            'media' => '',
        ],
    ];
}
