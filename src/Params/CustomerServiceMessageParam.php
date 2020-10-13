<?php

namespace Hillpy\MiniProgramSDK\Params;

class CustomerServiceMessageParam
{
    public static $customerServiceMessage = [
        'getTempMedia' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'media_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
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
            'msgtype' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'text',
                    'image',
                    'link',
                    'miniprogrampage',
                ],
            ],
            'text' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'content' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'image' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'media_id' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'link' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'title' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'description' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'url' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'thumb_url' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'miniprogrampage' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'title' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'pagepath' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'thumb_media_id' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
        ],
        'setTyping' => [
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
            'command' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    'Typing',
                    'CancelTyping',
                ],
            ],
        ],
        'uploadTempMedia' => [
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
                    'image',
                ],
            ],
            'media' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
    ];
}
