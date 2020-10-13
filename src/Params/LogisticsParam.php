<?php

namespace Hillpy\MiniProgramSDK\Params;

class LogisticsParam
{
    public static $logistics = [
        'batchGetOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'order_list' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'order_id' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'delivery_id' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'waybill_id' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                ],
            ],
        ],
        'addOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'add_source' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    0,  // 小程序订单
                    2,  // App或H5订单
                ],
            ],
            'wx_appid' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'openid' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'delivery_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'biz_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'custom_remark' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'tagid' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'sender' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'name' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'tel' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'mobile' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'company' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'post_code' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'country' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'province' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'city' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'area' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'receiver' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'name' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'tel' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'mobile' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'company' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'post_code' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'country' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'province' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'city' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'area' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'cargo' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'count' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'weight' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'space_x' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'space_y' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'space_z' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'detail_list' => [
                        'default' => '',
                        'required' => true,
                        'value' => [
                            'name' => [
                                'default' => '',
                                'required' => true,
                                'value' => '',
                            ],
                            'count' => [
                                'default' => '',
                                'required' => true,
                                'value' => '',
                            ],
                        ],
                    ],
                ],
            ],
            'shop' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'wxa_path' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'img_url' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'goods_name' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'goods_count' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'insured' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'use_insured' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                        'enum' => [
                            0,  // 不保价
                            1,  // 保价
                        ],
                    ],
                    'insured_value' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'service' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'service_type' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'service_name' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'expect_time' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'bindAccount' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'type' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'bind',
                    'unbind',
                ],
            ],
            'biz_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'password' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'remark_content' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'cancelOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'openid' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'delivery_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'waybill_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getAllAccount' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getAllDelivery' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'openid' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'delivery_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'waybill_id' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'getPath' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'openid' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'delivery_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'waybill_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getPrinter' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getQuota' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'biz_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'testUpdateOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'biz_id' => [
                'default' => 'test_biz_id',
                'required' => true,
                'value' => '',
                'enum' => [
                    'test_biz_id'
                ],
            ],
            'order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_id' => [
                'default' => 'TEST',
                'required' => true,
                'value' => '',
                'enum' => [
                    'TEST',
                ],
            ],
            'waybill_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action_time' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action_type' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    100001, // 揽件阶段-揽件成功
                    100002, // 揽件阶段-揽件失败
                    100003, // 揽件阶段-分配业务员
                    200001, // 运输阶段-更新运输轨迹
                    300002, // 派送阶段-开始派送
                    300003, // 派送阶段-签收成功
                    300004, // 派送阶段-签收失败
                    400001, // 异常阶段-订单取消
                    400002, // 异常阶段-订单滞留
                ],
            ],
            'action_msg' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'updatePrinter' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'openid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'update_type' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'bind', // 绑定
                    'unbind',   // 解除绑定
                ],
            ],
            'tagid_list' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'getContact' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'waybill_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'previewTemplate' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'waybill_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'waybill_template' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'waybill_data' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'custom' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'updateBusiness' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_app_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'biz_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'result_code' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'result_msg' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'updatePath' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'waybill_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action_time' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action_type' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    100001, // 揽件阶段-揽件成功
                    100002, // 揽件阶段-揽件失败
                    100003, // 揽件阶段-分配业务员
                    200001, // 运输阶段-更新运输轨迹
                    300002, // 派送阶段-开始派送
                    300003, // 派送阶段-签收成功
                    300004, // 派送阶段-签收失败
                    400001, // 异常阶段-订单取消
                    400002, // 异常阶段-订单滞留
                ],
            ],
            'action_msg' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
    ];
}
