<?php

namespace Hillpy\MiniProgramSDK\Params;

class OperationParam
{
    public static $operation = [
        'getFeedback' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'type' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    1,  // 无法打开小程序
                    2,  // 小程序闪退
                    3,  // 卡顿
                    4,  // 黑屏白屏
                    5,  // 死机
                    6,  // 界面错位
                    7,  // 界面加载慢
                    8,  // 其他异常
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
        'getJsErrSearch' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'errmsg_keyword' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'type' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    1,  // 客户端
                    2,  // 服务直达
                ],
            ],
            'client_version' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'start_time' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'end_time' => [
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
        'getPerformance' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'cost_time_type' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    1,  // 启动总耗时
                    2,  // 下载耗时
                    3,  // 初次渲染耗时
                ],
            ],
            'default_start_time' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'default_end_time' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'device' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    '@_all',    // 全部
                    1,  // IOS
                    2,  // android
                ],
            ],
            'is_download_code' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    '@_all',    // 全部
                    1,  // 是
                    2,  // 否
                ],
            ],
            'scene' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    '@_all',    // 全部
                    1,  // 小程序历史列表
                ],
            ],
            'networktype' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    '@_all',
                    'wifi',
                    '4g',
                    '3g',
                    '2g',
                ],
            ],
        ],
        'getSceneList' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getVersionList' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'realtimeLogSearch' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'date' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'begintime' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'endtime' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'start' => [
                'default' => 0,
                'required' => false,
                'value' => '',
            ],
            'limit' => [
                'default' => 20,
                'required' => false,
                'value' => '',
            ],
            'traceId' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'url' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'id' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'filterMsg' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'level' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    2,  // Info
                    4,  // Warn
                    8,  // Error
                ],
            ],
        ],
    ];
}
