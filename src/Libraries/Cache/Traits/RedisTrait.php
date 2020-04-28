<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Traits;

trait RedisTrait
{
    public static function set()
    {
        echo 'redis set';
    }

    public static function get()
    {
        echo 'redis get';
    }

    public static function delete()
    {
        echo 'redis delete';
    }
}