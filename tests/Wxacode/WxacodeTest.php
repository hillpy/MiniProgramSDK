<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class WxacodeTest extends TestCase
{
    use BaseTrait;

    public function testCreateQRCode()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'path' => 'pages/index/index',
            // 'width' => '',
        ];
        echo PHP_EOL;
        $res = $mp->createQRCode($paramArr);
        if (
            is_array($res) ||
            !is_null(json_decode($res))
        ) {
            var_dump($res);
        } else {
            $filepath = './tests/Wxacode/wxaqrcode/';
            $allPath = $_SERVER['DOCUMENT_ROOT'] . $filepath;
            $filename = time() . '_' . uniqid() . '.png';
            if (!is_dir($allPath)) {
                mkdir($allPath, 0777, true);
            }
            $file = fopen($allPath . $filename, 'w');
            fwrite($file, $res);
            fclose($file);
        }
    }

    public function testGet()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'path' => '',
            // 'width' => '',
            // 'auto_color' => '',
            // 'line_color' => '',
            // 'is_hyaline' => '',
        ];
        echo PHP_EOL;
        $res = $mp->get($paramArr);
        if (
            is_array($res) ||
            !is_null(json_decode($res))
        ) {
            var_dump($res);
        } else {
            $filepath = './tests/Wxacode/wxacode/';
            $allPath = $_SERVER['DOCUMENT_ROOT'] . $filepath;
            $filename = time() . '_' . uniqid() . '.png';
            if (!is_dir($allPath)) {
                mkdir($allPath, 0777, true);
            }
            $file = fopen($allPath . $filename, 'w');
            fwrite($file, $res);
            fclose($file);
        }
    }

    public function testGetUnlimited()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'scene' => '',
            // 'page' => '',
            // 'width' => '',
            // 'auto_color' => '',
            // 'line_color' => '',
            // 'is_hyaline' => '',
        ];
        echo PHP_EOL;
        $res = $mp->getUnlimited($paramArr);
        if (
            is_array($res) ||
            !is_null(json_decode($res))
        ) {
            var_dump($res);
        } else {
            $filepath = './tests/Wxacode/wxacodeunlimit/';
            $allPath = $_SERVER['DOCUMENT_ROOT'] . $filepath;
            $filename = time() . '_' . uniqid() . '.png';
            if (!is_dir($allPath)) {
                mkdir($allPath, 0777, true);
            }
            $file = fopen($allPath . $filename, 'w');
            fwrite($file, $res);
            fclose($file);
        }
    }
}
