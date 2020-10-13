<?php

namespace Hillpy\MiniProgramSDK\Params;

class SearchParam
{
    public static $search = [
        'imageSearch' => [
            'access_token' => [
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
        'siteSearch' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'keyword' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'next_page_info' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'submitPages' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'pages' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'path' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'query' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
        ],
    ];
}
