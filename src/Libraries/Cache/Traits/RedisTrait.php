<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Traits;

trait RedisTrait
{
    public static function set($key = '', $value = '', $expire = 0)
    {
        echo 'redis set';
    }

    public static function get($key = '')
    {
        echo 'redis get';
    }

    public static function delete($key = '')
    {
        echo 'redis delete';
    }

    public static function clear()
    {
        echo 'redis clear';
    }
}
