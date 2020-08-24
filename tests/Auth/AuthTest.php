<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    use BaseTrait;

    public function testCode2SessionWithCache()
    {
        global $argc, $argv;
        $mp = $this->getMPInstance();
        $paramArr = [
            'js_code' => isset($argv[3]) ? $argv[3] : '',
            'code_2_session_key' => isset($argv[4]) ? $argv[4] : '',
        ];
        echo PHP_EOL;
        var_dump($mp->code2SessionWithCache($paramArr));
    }

    public function testGetPaidUnionId()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'openid' => '',
            'transaction_id' => '',
            'mch_id' => '',
            'out_trade_no' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getPaidUnionId($paramArr));
    }

    public function testGetAccessTokenWithCache()
    {
        $mp = $this->getMPInstance();
        echo PHP_EOL;
        var_dump($mp->getToken());
    }
}
