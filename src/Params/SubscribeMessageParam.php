<?php

namespace Hillpy\MiniProgramSDK\Params;

class SubscribeMessageParam
{
    public static $subscribeMessage = [
        'addTemplate' => [
            'access_token' => '',
            'tid' => '',
            'kidList' => '',
            'sceneDesc' => '',
        ],
        'deleteTemplate' => [
            'access_token' => '',
            'priTmplId' => '',
        ],
        'getCategory' => [
            'access_token' => '',
        ],
        'getPubTemplateKeywordsById' => [
            'access_token' => '',
            'tid' => '',
        ],
        'getPubTemplateTitleList' => [
            'access_token' => '',
            'ids' => '',
            'start' => '',
            'limit' => '',
        ],
        'getTemplateList' => [
            'access_token' => '',
        ],
        'send' => [
            'access_token' => '',
            'touser' => '',
            'template_id' => '',
            'page' => '',
            'data' => '',
            'miniprogram_state' => '',
            'lang' => '',
        ],
    ];
}
