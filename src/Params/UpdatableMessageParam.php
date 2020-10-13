<?php

namespace Hillpy\MiniProgramSDK\Params;

class UpdatableMessageParam
{
    public static $updatableMessage = [
        'createActivityId' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'unionid' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'setUpdatableMsg' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'activity_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'target_state' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    0,  // 未开始
                    1,  // 已开始
                ],
            ],
            'template_info' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'parameter_list' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
        ],
    ];
}
