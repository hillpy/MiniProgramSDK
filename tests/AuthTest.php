<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    use BaseTrait;

    public function testGetAccessTokenWithCache()
    {
        $mp = $this->getMPInstance();
        echo PHP_EOL;
        var_dump($mp->getToken());
    }

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
}
