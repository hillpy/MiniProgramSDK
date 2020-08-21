<?php

namespace Hillpy\MiniProgramSDK\Params;

class LogisticsParam
{
    public static $logistics = [
        'batchGetOrder' => [
            'access_token' => '',
            'order_list' => [
                'order_id' => '',
                'delivery_id' => '',
                'waybill_id' => '',
            ],
        ],
        'addOrder' => [
            'access_token' => '',
            'add_source' => '',
            'wx_appid' => '',
            'order_id' => '',
            'openid' => '',
            'delivery_id' => '',
            'biz_id' => '',
            'custom_remark' => '',
            'tagid' => '',
            'sender' => [
                'name' => '',
                'tel' => '',
                'mobile' => '',
                'company' => '',
                'post_code' => '',
                'country' => '',
                'province' => '',
                'city' => '',
                'area' => '',
                'address' => '',
            ],
            'receiver' => [
                'name' => '',
                'tel' => '',
                'mobile' => '',
                'company' => '',
                'post_code' => '',
                'country' => '',
                'province' => '',
                'city' => '',
                'area' => '',
                'address' => '',
            ],
            'cargo' => [
                'count' => '',
                'weight' => '',
                'space_x' => '',
                'space_y' => '',
                'space_z' => '',
                'detail_list' => [
                    'name' => '',
                    'count' => '',
                ],
            ],
            'shop' => [
                'wxa_path' => '',
                'img_url' => '',
                'goods_name' => '',
                'goods_count' => '',
            ],
            'insured' => [
                'insured_value' => '',
                ''
            ],
            'service' => [
                'service_type' => '',
                'service_name' => '',
            ],
            'expect_time' => '',
        ],
        'bindAccount' => [
            'access_token' => '',
            'type' => '',
            'biz_id' => '',
            'delivery_id' => '',
            'password' => '',
            'remark_content' => '',
        ],
        'cancelOrder' => [
            'access_token' => '',
            'order_id' => '',
            'openid' => '',
            'delivery_id' => '',
            'waybill_id' => '',
        ],
        'getAllAccount' => [
            'access_token' => '',
        ],
        'getAllDelivery' => [
            'access_token' => '',
        ],
        'getOrder' => [
            'access_token' => '',
            'order_id' => '',
            'openid' => '',
            'delivery_id' => '',
            'waybill_id' => '',
        ],
        'getPath' => [
            'access_token' => '',
            'order_id' => '',
            'openid' => '',
            'delivery_id' => '',
            'waybill_id' => '',
        ],
        'getPrinter' => [
            'access_token' => '',
        ],
        'getQuota' => [
            'access_token' => '',
            'delivery_id' => '',
            'biz_id' => '',
        ],
        'testUpdateOrder' => [
            'access_token' => '',
            'biz_id' => '',
            'order_id' => '',
            'delivery_id' => '',
            'waybill_id' => '',
            'action_time' => '',
            'action_type' => '',
            'action_msg' => '',
        ],
        'updatePrinter' => [
            'access_token' => '',
            'openid' => '',
            'update_type' => '',
            'tagid_list' => '',
        ],
        'getContact' => [
            'access_token' => '',
            'token' => '',
            'waybill_id' => '',
        ],
        'previewTemplate' => [
            'access_token' => '',
            'waybill_id' => '',
            'waybill_template' => '',
            'waybill_data' => '',
            'custom' => '',
        ],
        'updateBusiness' => [
            'access_token' => '',
            'shop_app_id' => '',
            'biz_id' => '',
            'result_code' => '',
            'result_msg' => '',
        ],
        'updatePath' => [
            'access_token' => '',
            'token' => '',
            'waybill_id' => '',
            'action_time' => '',
            'action_type' => '',
            'action_msg' => '',
        ],
    ];
}
