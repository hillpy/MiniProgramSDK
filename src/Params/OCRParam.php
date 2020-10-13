<?php

namespace Hillpy\MiniProgramSDK\Params;

class OCRParam
{
    public static $OCR = [
        'bankCard' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img_url' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'businessLicense' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img_url' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'driverLicense' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img_url' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'idCard' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img_url' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'printedText' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img_url' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'vehicleLicense' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'type' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'photo',  // 拍照模式
                    'scan', // 扫描模式
                ],
            ],
            'img_url' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'img' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
    ];
}
