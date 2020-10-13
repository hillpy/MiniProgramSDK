<?php

namespace Hillpy\MiniProgramSDK\Params;

class PluginManagerParam
{
    public static $pluginManager = [
        'applyPlugin' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action' => [
                'default' => 'apply',
                'required' => true,
                'value' => '',
                'enum' => [
                    'apply'
                ],
            ],
            'plugin_appid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'reason' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'getPluginDevApplyList' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action' => [
                'default' => 'dev_apply_list',
                'required' => true,
                'value' => '',
                'enum' => [
                    'dev_apply_list'
                ],
            ],
            'page' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'num' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getPluginList' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action' => [
                'default' => 'list',
                'required' => true,
                'value' => '',
                'enum' => [
                    'list',
                ],
            ],
        ],
        'setDevPluginApplyStatus' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'dev_agree',    // 同意申请
                    'dev_refuse',   // 拒绝申请
                    'dev_delete',   // 删除已拒绝的申请者
                ],
            ],
            'appid' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'reason' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'unbindPlugin' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action' => [
                'default' => 'unbind',
                'required' => true,
                'value' => '',
                'enum' => [
                    'unbind',
                ],
            ],
            'plugin_appid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
    ];
}
