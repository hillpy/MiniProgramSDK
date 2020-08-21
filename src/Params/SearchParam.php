<?php

namespace Hillpy\MiniProgramSDK\Params;

class SearchParam
{
    public static $search = [
        'imageSearch' => [
            'access_token' => '',
            'img' => '',
        ],
        'siteSearch' => [
            'access_token' => '',
            'keyword' => '',
            'next_page_info' => '',
        ],
        'submitPages' => [
            'access_token' => '',
            'pages' => [
                'path' => '',
                'query' => '',
            ],
        ],
    ];
}
