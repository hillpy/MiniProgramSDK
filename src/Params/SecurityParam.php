<?php

namespace Hillpy\MiniProgramSDK\Params;

class SecurityParam
{
    public static $security = [
        'imgSecCheck' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'media' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'mediaCheckAsync' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'media_url' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'media_type' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    1,  // 音频
                    2,  // 图片
                ],
            ],
        ],
        'msgSecCheck' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'content' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
    ];
}
