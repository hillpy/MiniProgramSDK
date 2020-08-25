<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class OCRTest extends TestCase
{
    use BaseTrait;

    public function testBankcard()
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
        var_dump($mp->bankcard($paramArr));
    }

    public function testBusinessLicense()
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
        var_dump($mp->businessLicense($paramArr));
    }

    public function testDriverLicense()
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
        var_dump($mp->driverLicense($paramArr));
    }

    public function testIdcard()
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
        var_dump($mp->idcard($paramArr));
    }

    public function testPrintedText()
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
        var_dump($mp->printedText($paramArr));
    }

    public function testVehicleLicense()
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
        var_dump($mp->vehicleLicense($paramArr));
    }
}
