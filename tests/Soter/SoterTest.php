<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class SoterTest extends TestCase
{
    use BaseTrait;

    public function testVerifySignature()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'openid' => '',
            'json_string' => '',
            'json_signature' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->verifySignature($paramArr));
    }
}
