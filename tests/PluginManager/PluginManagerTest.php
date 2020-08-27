<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class PluginManagerTest extends TestCase
{
    use BaseTrait;

    public function testApplyPlugin()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'action' => 'apply',
            'plugin_appid' => '',
            'reason' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->applyPlugin($paramArr));
    }

    public function testGetPluginDevApplyList()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'action' => 'dev_apply_list',
            'page' => 1,
            'num' => 10,
        ];
        echo PHP_EOL;
        var_dump($mp->getPluginDevApplyList($paramArr));
    }

    public function testGetPluginList()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'action' => 'list',
        ];
        echo PHP_EOL;
        var_dump($mp->getPluginList($paramArr));
    }

    public function testSetDevPluginApplyStatus()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'action' => 'dev_agree',
            'appid' => '',
            'reason' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->setDevPluginApplyStatus($paramArr));
    }

    public function testUnbindPlugin()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'action' => 'unbind',
            'plugin_appid' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->unbindPlugin($paramArr));
    }
}
