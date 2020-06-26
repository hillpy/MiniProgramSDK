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

    public static $wxacode = [
        'createQRCode' => [
            'access_token' => '',
            'path' => '',
            'width' => '',
        ],
        'get' => [
            'access_token' => '',
            'path' => '',
            'width' => '',
            'auto_color' => '',
            'line_color' => '',
            'is_hyaline' => '',
        ],
        'getUnlimited' => [
            'access_token' => '',
            'scene' => '',
            'page' => '',
            'width' => '',
            'auto_color' => '',
            'line_color' => '',
            'is_hyaline' => '',
        ],
    ];

    public static $security = [
        'imgSecCheck' => [
            'access_token' => '',
            'media' => '',
        ],
        'mediaCheckAsync' => [
            'access_token' => '',
            'media_url' => '',
            'media_type' => '',
        ],
        'msgSecCheck' => [
            'access_token' => '',
            'content' => '',
        ],
    ];

    public static $img = [
        'aiCrop' => [
            'access_token' => '',
            'img_url' => '',
            'img' => '',
        ],
        'scanQRCode' => [
            'access_token' => '',
            'img_url' => '',
            'img' => '',
        ],
        'superresolution' => [
            'access_token' => '',
            'img_url' => '',
            'img' => '',
        ],
    ];

    public static $OCR = [
        'bankCard' => [
            'access_token' => '',
            'img_url' => '',
            'img' => '',
        ],
        'businessLicense' => [
            'access_token' => '',
            'img_url' => '',
            'img' => '',
        ],
        'driverLicense' => [
            'access_token' => '',
            'img_url' => '',
            'img' => '',
        ],
        'idCard' => [
            'access_token' => '',
            'img_url' => '',
            'img' => '',
        ],
        'printedText' => [
            'access_token' => '',
            'img_url' => '',
            'img' => '',
        ],
        'vehicleLicense' => [
            'access_token' => '',
            'img_url' => '',
            'img' => '',
        ],
    ];

    public static $operation = [
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

    public static $search = [
        'imageSearch' => [
            'access_token' => '',
            'img' => '',
        ],
        'siteSearch' => [
            'access_token' => '',
            'keyword' => '',
            'next_page_info' => '',
        ],
        'submitPages' => [
            'access_token' => '',
            'pages' => [
                'path' => '',
                'query' => '',
            ],
        ],
    ];

    public static $serviceMarket = [
        'invokeService' => [
            'access_token' => '',
            'service' => '',
            'api' => '',
            'data' => '',
            'client_msg_id' => '',
        ],
    ];

    public static $soter = [
        'verifySignature' => [
            'access_token' => '',
            'openid' => '',
            'json_string' => '',
            'json_signature' => '',
        ],
    ];

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

    public static $immediateDelivery = [
        'reOrder' => [
            'access_token' => '',
            'delivery_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'openid' => '',
            'sender' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'receiver' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'cargo' => [
                'goods_value' => '',
                'goods_height' => '',
                'goods_length' => '',
                'goods_width' => '',
                'goods_weight' => '',
                'goods_detail' => [
                    'goods' => [
                        'good_count' => '',
                        'good_name' => '',
                        'good_price' => '',
                        'good_unit' => '',
                    ]
                ],
                'goods_pickup_info' => '',
                'goods_delivery_info' => '',
                'cargo_first_class' => '',
                'cargo_second_class' => '',
            ],
            'order_info' => [
                'delivery_service_code' => '',
                'order_type' => '',
                'expected_delivery_time' => '',
                'expected_finish_time' => '',
                'expected_pick_time' => '',
                'poi_seq' => '',
                'note' => '',
                'order_time' => '',
                'is_insured' => '',
                'declared_value' => '',
                'tips' => '',
                'is_direct_delivery' => '',
                'cash_on_delivery' => '',
                'cash_on_pickup' => '',
                'rider_pick_method' => '',
                'is_finish_code_needed' => '',
                'is_pickup_code_needed' => '',
            ],
            'shop' => [
                'wxa_path' => '',
                'img_url' => '',
                'goods_name' => '',
                'goods_count' => '',
                'wxa_appid' => '',
            ],
            'sub_biz_id' => '',
        ],
        'abnormalConfirm' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'waybill_id' => '',
            'remark' => '',
        ],
        'addOrder' => [
            'access_token' => '',
            'delivery_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'openid' => '',
            'sender' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'receiver' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'cargo' => [
                'goods_value' => '',
                'goods_height' => '',
                'goods_length' => '',
                'goods_width' => '',
                'goods_weight' => '',
                'goods_detail' => [
                    'goods' => [
                        'good_count' => '',
                        'good_name' => '',
                        'good_price' => '',
                        'good_unit' => '',
                    ]
                ],
                'goods_pickup_info' => '',
                'goods_delivery_info' => '',
                'cargo_first_class' => '',
                'cargo_second_class' => '',
            ],
            'order_info' => [
                'delivery_service_code' => '',
                'order_type' => '',
                'expected_delivery_time' => '',
                'expected_finish_time' => '',
                'expected_pick_time' => '',
                'poi_seq' => '',
                'note' => '',
                'order_time' => '',
                'is_insured' => '',
                'declared_value' => '',
                'tips' => '',
                'is_direct_delivery' => '',
                'cash_on_delivery' => '',
                'cash_on_pickup' => '',
                'rider_pick_method' => '',
                'is_finish_code_needed' => '',
                'is_pickup_code_needed' => '',
            ],
            'shop' => [
                'wxa_path' => '',
                'img_url' => '',
                'goods_name' => '',
                'goods_count' => '',
                'wxa_appid' => '',
            ],
            'sub_biz_id' => '',
        ],
        'addTip' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'waybill_id' => '',
            'openid' => '',
            'tips' => '',
            'remark' => '',
        ],
        'bindAccount' => [
            'access_token' => '',
            'delivery_id' => '',
        ],
        'cancelOrder' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'waybill_id' => '',
            'cancel_reason_id' => '',
            'cancel_reason' => '',
        ],
        'getAllImmeDelivery' => [
            'access_token' => '',
        ],
        'getBindAccount' => [
            'access_token' => '',
        ],
        'getOrder' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
        ],
        'mockUpdateOrder' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'action_time' => '',
            'order_status' => '',
            'action_msg' => '',
        ],
        'openDelivery' => [
            'access_token' => '',
        ],
        'preAddOrder' => [
            'access_token' => '',
            'delivery_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'openid' => '',
            'sender' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'receiver' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'cargo' => [
                'goods_value' => '',
                'goods_height' => '',
                'goods_length' => '',
                'goods_width' => '',
                'goods_weight' => '',
                'goods_detail' => [
                    'goods' => [
                        'good_count' => '',
                        'good_name' => '',
                        'good_price' => '',
                        'good_unit' => '',
                    ]
                ],
                'goods_pickup_info' => '',
                'goods_delivery_info' => '',
                'cargo_first_class' => '',
                'cargo_second_class' => '',
            ],
            'order_info' => [
                'delivery_service_code' => '',
                'order_type' => '',
                'expected_delivery_time' => '',
                'expected_finish_time' => '',
                'expected_pick_time' => '',
                'poi_seq' => '',
                'note' => '',
                'order_time' => '',
                'is_insured' => '',
                'declared_value' => '',
                'tips' => '',
                'is_direct_delivery' => '',
                'cash_on_delivery' => '',
                'cash_on_pickup' => '',
                'rider_pick_method' => '',
                'is_finish_code_needed' => '',
                'is_pickup_code_needed' => '',
            ],
            'shop' => [
                'wxa_path' => '',
                'img_url' => '',
                'goods_name' => '',
                'goods_count' => '',
                'wxa_appid' => '',
            ],
            'sub_biz_id' => '',
        ],
        'preCancelOrder' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'waybill_id' => '',
            'cancel_reason_id' => '',
            'cancel_reason' => '',
        ],
        'realMockUpdateOrder' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'action_time' => '',
            'order_status' => '',
            'action_msg' => '',
            'delivery_sign' => '',
        ],
        'updateOrder' => [
            'access_token' => '',
            'wx_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'waybill_id' => '',
            'action_time' => '',
            'order_status' => '',
            'action_msg' => '',
            'wxa_path' => '',
            'agent' => [
                'name' => '',
                'phone' => '',
                'is_phone_encrypted' => '',
            ],
            'expected_delivery_time' => '',
        ]
    ];
}
