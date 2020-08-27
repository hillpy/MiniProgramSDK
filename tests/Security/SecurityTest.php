<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class SecurityTest extends TestCase
{
    use BaseTrait;

    public function testImgSecCheck()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        $file = 'tests/avatar.png';
        if (class_exists('\CURLFile')) {
            $media = new \CURLFile(realpath($file));
        } else {
            $media = '@' . realpath($file);
        }
        $paramArr = array_merge($paramArr, [
            'media' => $media
        ]);
        echo PHP_EOL;
        var_dump($mp->imgSecCheck($paramArr));
    }

    public function testMediaCheckAsync()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'media_url' => 'http://resource.hillpy.com/audio/hanabi.mp3',
            'media_type' => 1
        ];
        echo PHP_EOL;
        var_dump($mp->mediaCheckAsync($paramArr));
    }

    public function testMsgSecCheck()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'content' => '法轮功'
        ];
        echo PHP_EOL;
        var_dump($mp->msgSecCheck($paramArr));
    }
}
