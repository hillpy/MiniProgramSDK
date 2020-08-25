<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class ImmediateDeliveryTest extends TestCase
{
    use BaseTrait;

    public function testAbnormalConfirm()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'waybill_id' => '',
            'remark' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->abnormalConfirm($paramArr));
    }

    public function testAddOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
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
        ];
        echo PHP_EOL;
        var_dump($mp->addOrderByImme($paramArr));
    }

    public function testAddTip()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'waybill_id' => '',
            'openid' => '',
            'tips' => '',
            'remark' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->addTip($paramArr));
    }

    public function testBindAccount()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'delivery_id' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->bindAccountByImme($paramArr));
    }

    public function testCancelOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'waybill_id' => '',
            'cancel_reason_id' => '',
            'cancel_reason' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->cancelOrderByImme($paramArr));
    }

    public function testGetAllImmeDelivery()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->getAllImmeDelivery($paramArr));
    }

    public function testGetBindAccount()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->getBindAccount($paramArr));
    }

    public function testGetOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getOrderByImme($paramArr));
    }

    public function testMockUpdateOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'shopid' => '',
            'shop_order_id' => '',
            'action_time' => '',
            'order_status' => '',
            'action_msg' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->mockUpdateOrder($paramArr));
    }

    public function testOpenDelivery()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->openDelivery($paramArr));
    }

    public function testPreAddOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
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
        ];
        echo PHP_EOL;
        var_dump($mp->preAddOrder($paramArr));
    }

    public function testPreCancelOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'waybill_id' => '',
            'cancel_reason_id' => '',
            'cancel_reason' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->preCancelOrder($paramArr));
    }

    public function testRealMockUpdateOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'shopid' => '',
            'shop_order_id' => '',
            'action_time' => '',
            'order_status' => '',
            'action_msg' => '',
            'delivery_sign' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->realMockUpdateOrder($paramArr));
    }

    public function testReOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
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
        ];
        echo PHP_EOL;
        var_dump($mp->reOrder($paramArr));
    }

    public function testUpdateOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
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
        ];
        echo PHP_EOL;
        var_dump($mp->updateOrder($paramArr));
    }
}
