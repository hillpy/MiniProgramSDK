<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class ImgTest extends TestCase
{
    use BaseTrait;

    public function testAiCrop()
    {
        $mp = $this->getMPInstance();
        $num = time() % 2;
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        if ($num === 0) {
            $paramArr = array_merge($paramArr, [
                'img_url' => 'https://avatars1.githubusercontent.com/u/20219770?s=460&u=163d20e5db53334a577619b254aa1d5bdc3a2a0b&v=4'
            ]);
        } else {
            $file = 'tests/avatar.png';
            if (class_exists('\CURLFile')) {
                $media = new \CURLFile(realpath($file));
            } else {
                $media = '@' . realpath($file);
            }

            $paramArr = array_merge($paramArr, [
                'img' => $media
            ]);
        }
        echo PHP_EOL;
        var_dump($mp->aiCrop($paramArr));
    }

    public function testScanQRCode()
    {
        $mp = $this->getMPInstance();
        $num = time() % 2;
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        if ($num === 0) {
            $paramArr = array_merge($paramArr, [
                'img_url' => 'https://avatars1.githubusercontent.com/u/20219770?s=460&u=163d20e5db53334a577619b254aa1d5bdc3a2a0b&v=4'
            ]);
        } else {
            $file = 'tests/avatar.png';
            if (class_exists('\CURLFile')) {
                $media = new \CURLFile(realpath($file));
            } else {
                $media = '@' . realpath($file);
            }

            $paramArr = array_merge($paramArr, [
                'img' => $media
            ]);
        }
        echo PHP_EOL;
        var_dump($mp->scanQRCode($paramArr));
    }

    public function testSuperresolution()
    {
        $mp = $this->getMPInstance();
        $num = time() % 2;
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        if ($num === 0) {
            $paramArr = array_merge($paramArr, [
                'img_url' => 'https://avatars1.githubusercontent.com/u/20219770?s=460&u=163d20e5db53334a577619b254aa1d5bdc3a2a0b&v=4'
            ]);
        } else {
            $file = 'tests/avatar.png';
            if (class_exists('\CURLFile')) {
                $media = new \CURLFile(realpath($file));
            } else {
                $media = '@' . realpath($file);
            }

            $paramArr = array_merge($paramArr, [
                'img' => $media
            ]);
        }
        echo PHP_EOL;
        var_dump($mp->superresolution($paramArr));
    }
}
