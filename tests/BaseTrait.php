<?php

namespace Hillpy\MiniProgramSDK\Tests;

use Hillpy\MiniProgramSDK\Libraries\Cache\Cache;
use Hillpy\MiniProgramSDK\MP;

trait BaseTrait
{
    public function getMPInstance()
    {
        $options = [
            'app_id' => Env::$mp['app_id'],
            'app_secret' => Env::$mp['app_secret'],
            'cache_driver' => 'redis'
        ];

        return MP::getInstance($options);
    }

    public function getCacheInstance()
    {
        $option = [
            'cache_driver' => 'redis'
        ];
        return Cache::getInstance($option);
    }
}
