<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class ServiceMarketTest extends TestCase
{
    use BaseTrait;

    public function testInvokeService()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'service' => '',
            'api' => '',
            'data' => '',
            'client_msg_id' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->invokeService($paramArr));
    }
}
