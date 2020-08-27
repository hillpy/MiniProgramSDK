<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class OperationTest extends TestCase
{
    use BaseTrait;

    public function testGetFeedback()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'type' => '',
            'page' => '',
            'num' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getFeedback($paramArr));
    }

    public function testGetJsErrSearch()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'errmsg_keyword' => '',
            'type' => '',
            'client_version' => '',
            'start_time' => '',
            'end_time' => '',
            'start' => '',
            'limit' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getJsErrSearch($paramArr));
    }

    public function testGetPerformance()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'cost_time_type' => '',
            'default_start_time' => '',
            'default_end_time' => '',
            'device' => '',
            'is_download_code' => '',
            'scene' => '',
            'networktype' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getPerformance($paramArr));
    }

    public function testGetSceneList()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->getSceneList($paramArr));
    }

    public function testGetVersionList()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->getVersionList($paramArr));
    }

    public function testRealtimeLogSearch()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'date' => '',
            'begintime' => '',
            'endtime' => '',
            'start' => '',
            'limit' => '',
            'traceId' => '',
            'url' => '',
            'id' => '',
            'filterMsg' => '',
            'level' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->realtimeLogSearch($paramArr));
    }
}
