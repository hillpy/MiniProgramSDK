<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class SubscribeMessageTest extends TestCase
{
    use BaseTrait;

    public function testAddTemplate()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'tid' => '',
            'kidList' => '',
            'sceneDesc' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->addTemplate($paramArr));
    }

    public function testDeleteTemplate()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'priTmplId' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->deleteTemplate($paramArr));
    }

    public function testGetCategory()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->getCategory($paramArr));
    }

    public function testGetPubTemplateKeywordsById()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'tid' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getPubTemplateKeywordsById($paramArr));
    }

    public function testGetPubTemplateTitleList()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'ids' => '',
            'start' => '',
            'limit' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->getPubTemplateTitleList($paramArr));
    }

    public function testGetTemplateList()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->getTemplateList($paramArr));
    }

    public function testSendBySub()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'touser' => '',
            'template_id' => '',
            'page' => '',
            'data' => '',
            'miniprogram_state' => '',
            'lang' => '',
        ];
        echo PHP_EOL;
        var_dump($mp->sendBySub($paramArr));
    }
}
