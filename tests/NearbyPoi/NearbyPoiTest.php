<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class NearbyPoiTest extends TestCase
{
    use BaseTrait;

    public function testAdd()
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
        var_dump($mp->add($paramArr));
    }

    public function testDelete()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'poi_id' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->delete($paramArr));
    }

    public function testGetList()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'page' => '',
            'page_rows' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getList($paramArr));
    }

    public function testSetShowStatus()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'po_id' => '',
            'status' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->setShowStatus($paramArr));
    }
}
