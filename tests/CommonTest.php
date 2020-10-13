<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;
use Hillpy\MiniProgramSDK\Common;

class WxacodeTest extends TestCase
{
    public function testCommon()
    {
        $rawData = [
            'a' => [
              'default' => 'aa',
              'required' => false,
              'value' => '',
            ],
            'b' => [
              'default' => 'bb',
              'required' => false,
              'value' => [
                  'c' => [
                      'default' => 'cc',
                      'required' => true,
                      'value' => '',
                  ],
                  'c1' => [
                      'default' => 'cc1',
                      'required' => false,
                      'value' => '',
                ],
              ],
            ],
            'd' => [
              'default' => 'dd',
              'required' => true,
              'value' => '',
            ],
            'e' => [
              'default' => '',
              'required' => false,
              'value' => '',
            ],
        ];
        $newData = [
            'a' => 1,
            'b' => [
                'c' => 2,
            ],
        ];
        var_dump(Common::handleParam($rawData, $newData));
    }
}
