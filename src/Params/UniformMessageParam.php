<?php

namespace Hillpy\MiniProgramSDK\Params;

class UniformMessageParam
{
    public static $uniformMessage = [
        'send' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'touser' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'weapp_template_msg' => [
                'default' => '',
                'required' => false,
                'value' => [
                    'template_id' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'page' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'form_id' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'data' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'emphasis_keyword' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'mp_template_msg' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'appid' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'template_id' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'url' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'miniprogram' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'data' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
        ],
    ];
}
