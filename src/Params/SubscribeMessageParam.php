<?php

namespace Hillpy\MiniProgramSDK\Params;

class SubscribeMessageParam
{
    public static $subscribeMessage = [
        'addTemplate' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'tid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'kidList' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'sceneDesc' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'deleteTemplate' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'priTmplId' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getCategory' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getPubTemplateKeywordsById' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'tid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getPubTemplateTitleList' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'ids' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'start' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'limit' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getTemplateList' => [
            'access_token' => [
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
            'template_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'page' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'data' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'miniprogram_state' => [
                'default' => 'formal',
                'required' => false,
                'value' => '',
                'enum' => [
                    'developer',    // 开发版
                    'trial',    // 体验版
                    'formal',   // 正式版
                ],
            ],
            'lang' => [
                'default' => 'zh_CN',
                'required' => false,
                'value' => '',
                'enum' => [
                    'zh_CN',    // 简体中文
                    'en_US',    // 英文
                    'zh_HK',    // 繁体中文
                    'zh_TW',    // 繁体中文
                ],
            ],
        ],
    ];
}
