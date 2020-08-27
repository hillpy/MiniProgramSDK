<?php

namespace Hillpy\MiniProgramSDK\Params;

class UpdatableMessageParam
{
    public static $updatableMessage = [
        'createActivityId' => [
            'access_token' => '',
        ],
        'setUpdatableMsg' => [
            'access_token' => '',
            'activity_id' => '',
            'target_state' => '',
            'template_info' => [
                'parameter_list' => [],
            ],
        ],
    ];
}
