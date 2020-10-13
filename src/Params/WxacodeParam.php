<?php

namespace Hillpy\MiniProgramSDK\Params;

class WxacodeParam
{
    public static $wxacode = [
        'createQRCode' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'path' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'width' => [
                'default' => 430,
                'required' => false,
                'value' => '',
            ],
        ],
        'get' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'path' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'width' => [
                'default' => 430,
                'required' => false,
                'value' => '',
            ],
            'auto_color' => [
                'default' => false,
                'required' => false,
                'value' => '',
                'enum' => [
                    false,
                    true,
                ],
            ],
            'line_color' => [
                'default' => [
                    'r' => 0,
                    'g' => 0,
                    'b' => 0,
                ],
                'required' => false,
                'value' => '',
            ],
            'is_hyaline' => [
                'default' => false,
                'required' => false,
                'value' => '',
                'enum' => [
                    false,
                    true,
                ],
            ],
        ],
        'getUnlimited' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'scene' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'page' => [
                'default' => 'pages/index/index',
                'required' => false,
                'value' => '',
            ],
            'width' => [
                'default' => 430,
                'required' => false,
                'value' => '',
            ],
            'auto_color' => [
                'default' => false,
                'required' => false,
                'value' => '',
                'enum' => [
                    false,
                    true,
                ],
            ],
            'line_color' => [
                'default' => [
                    'r' => 0,
                    'g' => 0,
                    'b' => 0,
                ],
                'required' => false,
                'value' => '',
            ],
            'is_hyaline' => [
                'default' => false,
                'required' => false,
                'value' => '',
                'enum' => [
                    false,
                    true,
                ],
            ],
        ],
    ];
}
