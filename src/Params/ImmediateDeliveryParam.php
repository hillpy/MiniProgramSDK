<?php

namespace Hillpy\MiniProgramSDK\Params;

class ImmediateDeliveryParam
{
    public static $immediateDelivery = [
        'abnormalConfirm' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shopid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_no' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_sign' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'waybill_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'remark' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'addOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_token' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'shopid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_no' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_sign' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'openid' => [
                'default' => '',
                'required' => true,
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
                    'city' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address_detail' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'phone' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lng' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lat' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'coordinate_type' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 火星坐标（高德、腾讯）
                            1,  // 百度
                        ],
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
                    'city' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address_detail' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'phone' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lng' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lat' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'coordinate_type' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 火星坐标（高德、腾讯）
                            1,  // 百度坐标
                        ],
                    ],
                ],
            ],
            'cargo' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'goods_value' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'goods_height' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_length' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_width' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_weight' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'goods_detail' => [
                        'default' => '',
                        'required' => true,
                        'value' => [
                            'goods' => [
                                'default' => '',
                                'required' => true,
                                'value' => [
                                    'good_count' => [
                                        'default' => '',
                                        'required' => true,
                                        'value' => '',
                                    ],
                                    'good_name' => [
                                        'default' => '',
                                        'required' => true,
                                        'value' => '',
                                    ],
                                    'good_price' => [
                                        'default' => '',
                                        'required' => false,
                                        'value' => '',
                                    ],
                                    'good_unit' => [
                                        'default' => '',
                                        'required' => false,
                                        'value' => '',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'goods_pickup_info' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_delivery_info' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'cargo_first_class' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'cargo_second_class' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'order_info' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'delivery_service_code' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'order_type' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 即时单
                            1,  // 预约单
                        ],
                    ],
                    'expected_delivery_time' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                    ],
                    'expected_finish_time' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                    ],
                    'expected_pick_time' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                    ],
                    'poi_seq' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'note' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'order_time' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'is_insured' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 非保价
                            1,  // 保价
                        ],
                    ],
                    'declared_value' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'tips' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'is_direct_delivery' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 不需要
                            1,  // 需要
                        ],
                    ],
                    'cash_on_delivery' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'cash_on_pickup' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'rider_pick_method' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            1,  // 从门店取件送至用户
                            2,  // 从用户取件送至门店
                        ],
                    ],
                    'is_finish_code_needed' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 不需要
                            1,  // 需要
                        ],
                    ],
                    'is_pickup_code_needed' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 不需要
                            1,  // 需要
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
                    'wxa_appid' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                ],
            ],
            'sub_biz_id' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'addTip' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shopid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_no' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_sign' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'waybill_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'openid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'tips' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'remark' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'bindAccount' => [
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
        ],
        'cancelOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shopid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_no' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_sign' => [
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
            'cancel_reason_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    1,  // 暂时不需要邮寄
                    2,  // 价格不合适
                    3,  // 订单信息有误，重新下单
                    4,  // 骑手取货不及时
                    5,  // 骑手配送不及时
                    6,  // 其他原因(如果选择6，需要填写取消原因，否则不需要填写)
                ],
            ],
            'cancel_reason' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'getAllImmeDelivery' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getBindAccount' => [
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
            'shopid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_no' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_sign' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'mockUpdateOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shopid' => [
                'default' => 'test_shop_id',
                'required' => true,
                'value' => '',
                'enum' => [
                    'test_shop_id',
                ],
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action_time' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'order_status' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action_msg' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'openDelivery' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'preAddOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shopid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_no' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_sign' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'openid' => [
                'default' => '',
                'required' => true,
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
                    'city' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address_detail' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'phone' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lng' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lat' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'coordinate_type' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 火星坐标（高德、腾讯）
                            1,  // 百度坐标
                        ],
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
                    'city' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address_detail' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'phone' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lng' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lat' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'coordinate_type' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 火星坐标（高德、腾讯）
                            1,  // 百度坐标
                        ],
                    ],
                ],
            ],
            'cargo' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'goods_value' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'goods_height' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_length' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_width' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_weight' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'goods_detail' => [
                        'default' => '',
                        'required' => false,
                        'value' => [
                            'goods' => [
                                'default' => '',
                                'required' => true,
                                'value' => [
                                    'good_count' => [
                                        'default' => '',
                                        'required' => true,
                                        'value' => '',
                                    ],
                                    'good_name' => [
                                        'default' => '',
                                        'required' => true,
                                        'value' => '',
                                    ],
                                    'good_price' => [
                                        'default' => '',
                                        'required' => false,
                                        'value' => '',
                                    ],
                                    'good_unit' => [
                                        'default' => '',
                                        'required' => false,
                                        'value' => '',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'goods_pickup_info' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_delivery_info' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'cargo_first_class' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'cargo_second_class' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'order_info' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'delivery_service_code' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'order_type' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 即时单
                            1,  // 预约单
                        ],
                    ],
                    'expected_delivery_time' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                    ],
                    'expected_finish_time' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                    ],
                    'expected_pick_time' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                    ],
                    'poi_seq' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'note' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'order_time' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'is_insured' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 非保价
                            1,  // 保价
                        ],
                    ],
                    'declared_value' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'tips' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'is_direct_delivery' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 不需要
                            1,  // 需要
                        ],
                    ],
                    'cash_on_delivery' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'cash_on_pickup' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'rider_pick_method' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            1,  // 从门店取件送至用户
                            2,  // 从用户取件送至门店
                        ],
                    ],
                    'is_finish_code_needed' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 不需要
                            1,  // 需要
                        ],
                    ],
                    'is_pickup_code_needed' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 不需要
                            1,  // 需要
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
                    'wxa_appid' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                ],
            ],
            'sub_biz_id' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'preCancelOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shopid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_no' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_sign' => [
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
                'required' => true,
                'value' => '',
            ],
            'cancel_reason_id' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    1,  // 暂时不需要邮寄
                    2,  // 价格不合适
                    3,  // 订单信息有误，重新下单
                    4,  // 骑手取货不及时
                    5,  // 骑手配送不及时
                    6,  // 其他原因(如果选择6，需要填写取消原因，否则不需要填写)
                ],
            ],
            'cancel_reason' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'realMockUpdateOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shopid' => [
                'default' => 'test_shop_id',
                'required' => true,
                'value' => '',
                'enum' => [
                    'test_shop_id',
                ],
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action_time' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'order_status' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action_msg' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'delivery_sign' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'reOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_token' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'shopid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_no' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_sign' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'delivery_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'openid' => [
                'default' => '',
                'required' => true,
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
                    'city' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address_detail' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'phone' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lng' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lat' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'coordinate_type' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 火星坐标（高德、腾讯）
                            1,  // 百度坐标
                        ],
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
                    'city' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'address_detail' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'phone' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lng' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'lat' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'coordinate_type' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 火星坐标（高德、腾讯）
                            1,  // 百度坐标
                        ],
                    ],
                ],
            ],
            'cargo' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'goods_value' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'goods_height' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_length' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_width' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_weight' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'goods_detail' => [
                        'default' => '',
                        'required' => false,
                        'value' => [
                            'goods' => [
                                'default' => '',
                                'required' => true,
                                'value' => [
                                    'good_count' => [
                                        'default' => '',
                                        'required' => true,
                                        'value' => '',
                                    ],
                                    'good_name' => [
                                        'default' => '',
                                        'required' => true,
                                        'value' => '',
                                    ],
                                    'good_price' => [
                                        'default' => '',
                                        'required' => false,
                                        'value' => '',
                                    ],
                                    'good_unit' => [
                                        'default' => '',
                                        'required' => false,
                                        'value' => '',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'goods_pickup_info' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'goods_delivery_info' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'cargo_first_class' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'cargo_second_class' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'order_info' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'delivery_service_code' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'order_type' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 即时单
                            1,  // 预约单
                        ],
                    ],
                    'expected_delivery_time' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                    ],
                    'expected_finish_time' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                    ],
                    'expected_pick_time' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                    ],
                    'poi_seq' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'note' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'order_time' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'is_insured' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 非保价
                            1,  // 保价
                        ],
                    ],
                    'declared_value' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'tips' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'is_direct_delivery' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 不需要
                            1,  // 需要
                        ],
                    ],
                    'cash_on_delivery' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'cash_on_pickup' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'rider_pick_method' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            1,  // 从门店取件送至用户
                            2,  // 从用户取件送至门店
                        ],
                    ],
                    'is_finish_code_needed' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 不需要
                            1,  // 需要
                        ],
                    ],
                    'is_pickup_code_needed' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 不需要
                            1,  // 需要
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
                    'wxa_appid' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                ],
            ],
            'sub_biz_id' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'updateOrder' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'wx_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shopid' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_order_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'shop_no' => [
                'default' => '',
                'required' => false,
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
            'order_status' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'action_msg' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'wxa_path' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'agent' => [
                'default' => '',
                'required' => false,
                'value' => [
                    'name' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'phone' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'is_phone_encrypted' => [
                        'default' => 0,
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            0,  // 电话不加密
                            1,  // 电话加密
                        ],
                    ],
                ],
            ],
            'expected_delivery_time' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
    ];
}
