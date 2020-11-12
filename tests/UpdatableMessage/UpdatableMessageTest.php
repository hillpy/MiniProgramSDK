<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class UpdatableMessageTest extends TestCase
{
    use BaseTrait;

    public function testCreateActivityId()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        var_dump($mp->createActivityId($paramArr));
    }

    public function testSetUpdatableMsg()
    {
        $mp = $this->getMPInstance();

        $paramArr = [
            'access_token' => $mp->getToken(),
        ];
        echo PHP_EOL;
        $res = $mp->createActivityId($paramArr);

        $paramArr = [
            'access_token' => $mp->getToken(),
            'activity_id' => $res['errcode'] == 0 ? $res['activity_id'] : '',
            'target_state' => 0,
            'template_info' => [
                'parameter_list' => [
                    [
                        'name' => 'member_count',   // target_state=0时必传
                        'value' => '1', // 注意，此处要传字符串
                    ],
                    [
                        'name' => 'room_limit', // target_state=0时必传
                        'value' => '5', // 注意，此处要传字符串
                    ],
                    [
                        'name' => 'path',   // target_state=1时必传
                        'value' => 'pages/index/index?foo=bar',
                    ],
                    [
                        'name' => 'version_type',   // target_state=1时必传
                        'value' => 'develop',
                    ],
                ],
            ],
        ];

        echo PHP_EOL;
        var_dump($mp->setUpdatableMsg($paramArr));
    }
}
