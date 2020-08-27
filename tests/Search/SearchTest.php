<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    use BaseTrait;

    public function testImageSearch()
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
            'img' => $media
        ]);
        echo PHP_EOL;
        var_dump($mp->imageSearch($paramArr));
    }

    public function testSiteSearch()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'keyword' => '手机',
            'next_page_info' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->siteSearch($paramArr));
    }

    public function testSubmitPages()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'pages' => [
                'path' => 'pages/index/index',
                'query' => '',
            ],
        ];
        echo PHP_EOL;
        var_dump($mp->submitPages($paramArr));
    }
}
