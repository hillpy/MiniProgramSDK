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
                        'name' => 'member_count',
                        'value' => 1,
                    ],
                    [
                        'name' => 'room_limit',
                        'value' => 5,
                    ],
                ],
            ],
        ];

        echo PHP_EOL;
        var_dump($mp->setUpdatableMsg($paramArr));
    }
}
