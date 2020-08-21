<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class CustomerServiceMessageTest extends TestCase
{
    use BaseTrait;

    public function testGetTempMedia()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'media_id' => '',
        ];
        echo PHP_EOL;
        $res = $mp->getTempMedia($paramArr);
        if (is_null(json_decode($res))) {
            $path = 'tests/';
            $filename = 'test.png';
            $file = fopen($path . $filename, 'w');
            fwrite($file, $res);
            fclose($file);
        } else {
            var_dump($res);
        }
    }

    public function testSend()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'touser' => '',
            'msgtype' => 'text',
            'text' => [
                'content' => 'hello~'
            ],
        ];
        echo PHP_EOL;
        var_dump($mp->sendByCus($paramArr));
    }

    public function testSetTyping()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'touser' => '',
            'command' => 'Typing',
        ];
        echo PHP_EOL;
        var_dump($mp->setTyping($paramArr));
    }

    public function testUploadTempMedia()
    {
        $mp = $this->getMPInstance();
        $file = 'tests/avatar.png';
        if (class_exists('\CURLFile')) {
            $media = new \CURLFile(realpath($file));
        } else {
            $media = '@' . realpath($file);
        }
        $paramArr = [
            'access_token' => $mp->getToken(),
            'type' => 'image',
            'media' => $media,
        ];
        var_dump($mp->uploadTempMedia($paramArr));
    }
}
