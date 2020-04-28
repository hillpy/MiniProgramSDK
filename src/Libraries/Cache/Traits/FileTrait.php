<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Traits;

trait FileTrait
{
    public static function set($key = '', $value = '', $expire = 0)
    {
        echo 'file set';
    }

    public static function get($key = '')
    {
        echo 'file get';
    }

    public static function delete($key = '')
    {
        echo 'file delete';
    }
}