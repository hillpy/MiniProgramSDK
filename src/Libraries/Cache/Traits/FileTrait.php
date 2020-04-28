<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Traits;

trait FileTrait
{
    public static function set()
    {
        echo 'file set';
    }

    public static function get()
    {
        echo 'file get';
    }

    public static function delete()
    {
        echo 'file delete';
    }
}