<?php

namespace Hillpy\MiniProgramSDK\Params;

class PluginManagerParam
{
    public static $pluginManager = [
        'applyPlugin' => [
            'access_token' => '',
            'action' => '',
            'plugin_appid' => '',
            'reason' => '',
        ],
        'getPluginDevApplyList' => [
            'access_token' => '',
            'action' => '',
            'page' => '',
            'num' => '',
        ],
        'getPluginList' => [
            'access_token' => '',
            'action' => '',
        ],
        'setDevPluginApplyStatus' => [
            'access_token' => '',
            'action' => '',
            'appid' => '',
            'reason' => '',
        ],
        'unbindPlugin' => [
            'access_token' => '',
            'action' => '',
            'plugin_appid' => '',
        ],
    ];
}
