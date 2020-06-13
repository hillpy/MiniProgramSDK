<?php

namespace Hillpy\MiniProgramSDK;

class Param
{
    public static $auth = [
        'code2Session' => [
            'appid' => '',
            'secret' => '',
            'js_code' => '',
            'grant_type' => 'authorization_code',
        ],
        'getPaidUnionId' => [
            'access_token' => '',
            'openid' => '',
            'transaction_id' => '',
            'mch_id' => '',
            'out_trade_no' => '',
        ],
        'getAccessToken' => [
            'grant_type' => 'client_credential',
            'appid' => '',
            'secret' => '',
        ],
    ];

    public static $decryption = [
        'decryptUserInfo' => [
            'code' => '',
            'rawData' => '',
            'signature' => '',
            'encryptedData' => '',
            'iv' => '',
            'appid' => '',
        ],
        'decryptPhone' => [
            'code' => '',
            'rawData' => '',
            'encryptedData' => '',
            'appid' => '',
        ],
    ];

    public static $analysis = [
        'getDailyRetain' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getMonthlyRetain' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getWeeklyRetain' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getDailySummary' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getDailyVisitTrend' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getMonthlyVisitTrend' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getWeeklyVisitTrend' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getUserPortrait' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getVisitDistribution' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getVisitPage' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
    ];

    public static $customerServiceMessage = [
        'getTempMedia' => [
            'access_token' => '',
            'media_id' => '',
        ],
        'send' => [
            'access_token' => '',
            'touser' => '',
            'msgtype' => '',
            'text' => [
                'content' => '',
            ],
            'image' => [
                'media_id' => '',
            ],
            'link' => [
                'title' => '',
                'description' => '',
                'url' => '',
                'thumb_url' => '',
            ],
            'miniprogrampage' => [
                'title' => '',
                'pagepath' => '',
                'thumb_media_id' => '',
            ],
        ],
        'setTyping' => [
            'access_token' => '',
            'touser' => '',
            'command' => '',
        ],
        'uploadTempMedia' => [
            'access_token' => '',
            'type' => '',
            'media' => '',
        ],
    ];

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

    public static $updatableMessage = [
        'createActivityId' => [
            'access_token' => '',
        ],
        'createActivityId' => [
            'access_token' => '',
            'activity_id' => '',
            'target_state' => '',
            'template_info' => [
                'parameter_list' => '',
            ],
        ],
    ];

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

    public static $nearbyPoi = [
        'add' => [
            'access_token' => '',
            'is_comm_nearby' => '',
            'pic_list' => '',
            'service_infos' => '',
            'kf_info' => '',
            'hour' => '',
            'address' => '',
            'poi_id' => '',
            'company_name' => '',
            'contract_phone' => '',
            'credential' => '',
            'qualification_list' => '',
            'mapPoiId' => '',
        ],
        'delete' => [
            'access_token' => '',
            'poi_id' => '',
        ],
        'getList' => [
            'access_token' => '',
            'page' => '',
            'page_rows' => '',
        ],
        'setShowStatus' => [
            'access_token' => '',
            'po_id' => '',
            'status' => '',
        ],
    ];
}
