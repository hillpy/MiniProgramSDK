<?php

namespace Hillpy\MiniProgramSDK\Params;

class OperationParam
{
    public static $operation = [
        'getFeedback' => [
            'access_token' => '',
            'type' => '',
            'page' => '',
            'num' => '',
        ],
        'getJsErrSearch' => [
            'access_token' => '',
            'errmsg_keyword' => '',
            'type' => '',
            'client_version' => '',
            'start_time' => '',
            'end_time' => '',
            'start' => '',
            'limit' => '',
        ],
        'getPerformance' => [
            'access_token' => '',
            'cost_time_type' => '',
            'default_start_time' => '',
            'default_end_time' => '',
            'device' => '',
            'is_download_code' => '',
            'scene' => '',
            'networktype' => '',
        ],
        'getSceneList' => [
            'access_token' => '',
        ],
        'getVersionList' => [
            'access_token' => '',
        ],
        'realtimeLogSearch' => [
            'access_token' => '',
            'date' => '',
            'begintime' => '',
            'endtime' => '',
            'start' => '',
            'limit' => '',
            'traceId' => '',
            'url' => '',
            'id' => '',
            'filterMsg' => '',
            'level' => '',
        ],
    ];
}
