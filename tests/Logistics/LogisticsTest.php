<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class LogisticsTest extends TestCase
{
    use BaseTrait;

    public function testBatchGetOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'order_list' => [
                'order_id' => '',
                'delivery_id' => '',
                'waybill_id' => '',
            ],
        ];
        echo PHP_EOL;
        var_dump($mp->batchGetOrder($paramArr));
    }

    public function testAddOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
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
        ];
        echo PHP_EOL;
        var_dump($mp->addOrderByLogi($paramArr));
    }

    public function testBindAccount()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'type' => '',
            'biz_id' => '',
            'delivery_id' => '',
            'password' => '',
            'remark_content' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->bindAccountByLogi($paramArr));
    }

    public function testCancelOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'order_id' => '',
            'openid' => '',
            'delivery_id' => '',
            'waybill_id' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->cancelOrderByLogi($paramArr));
    }

    public function testGetAllAccount()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->getAllAccount($paramArr));
    }

    public function testGetAllDelivery()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->getAllDelivery($paramArr));
    }

    public function testGetOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'order_id' => '',
            'openid' => '',
            'delivery_id' => '',
            'waybill_id' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getOrderByLogi($paramArr));
    }

    public function testGetPath()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'order_id' => '',
            'openid' => '',
            'delivery_id' => '',
            'waybill_id' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getPath($paramArr));
    }

    public function testGetPrinter()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->getPrinter($paramArr));
    }

    public function testGetQuota()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'delivery_id' => '',
            'biz_id' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getQuota($paramArr));
    }

    public function testTestUpdateOrder()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'biz_id' => '',
            'order_id' => '',
            'delivery_id' => '',
            'waybill_id' => '',
            'action_time' => '',
            'action_type' => '',
            'action_msg' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->testUpdateOrder($paramArr));
    }

    public function testUpdatePrinter()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'openid' => '',
            'update_type' => '',
            'tagid_list' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->updatePrinter($paramArr));
    }

    public function testGetContact()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'token' => '',
            'waybill_id' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getContact($paramArr));
    }

    public function testPreviewTemplate()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'waybill_id' => '',
            'waybill_template' => '',
            'waybill_data' => '',
            'custom' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->previewTemplate($paramArr));
    }

    public function testUpdateBusiness()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'shop_app_id' => '',
            'biz_id' => '',
            'result_code' => '',
            'result_msg' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->updateBusiness($paramArr));
    }

    public function testUpdatePath()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'token' => '',
            'waybill_id' => '',
            'action_time' => '',
            'action_type' => '',
            'action_msg' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->updatePath($paramArr));
    }
}
