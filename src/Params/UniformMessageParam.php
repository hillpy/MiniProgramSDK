<?php

namespace Hillpy\MiniProgramSDK\Params;

class UniformMessageParam
{
    public static $uniformMessage = [
        'sned' => [
            'access_token' => '',
            'touser' => '',
            'weapp_template_msg' => [
                'template_id' => '',
                'page' => '',
                'form_id' => '',
                'data' => '',
                'emphasis_keyword' => '',
            ],
            'mp_template_msg' => [
                'appid' => '',
                'template_id' => '',
                'url' => '',
                'miniprogram' => '',
                'data' => '',
            ],
        ],
    ];
}
