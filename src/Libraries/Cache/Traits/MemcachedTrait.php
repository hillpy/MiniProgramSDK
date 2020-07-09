<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Traits;

trait MemcachedTrait
{
    public static function set($key = '', $value = '', $expire = 0)
    {
        echo 'memcached set';
    }

    public static function get($key = '')
    {
        echo 'memcached get';
    }

    public static function delete($key = '')
    {
        echo 'memcached delete';
    }

    public static function clear()
    {
        echo 'memcached clear';
    }
}
