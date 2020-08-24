<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class DecryptionTest extends TestCase
{
    use BaseTrait;

    public function testDecryptUserInfo()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'code' => '',
            'encrypted_data' => '',
            'session_key' => '',
            'iv' => '',
            // 'app_id' => Env::$mp['app_id'],  // 默认优先采用实例化时使用的app_id，故无需传入
            'raw_data' => '',
            'signature' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->decryptUserInfo($paramArr));
    }

    public function testDecryptPhone()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'code' => '',
            'encrypted_data' => '',
            'session_key' => '',
            'iv' => '',
            // 'app_id' => Env::$mp['app_id'],  // 默认优先采用实例化时使用的app_id，故无需传入
        ];
        echo PHP_EOL;
        var_dump($mp->decryptPhone($paramArr));
    }
}
