<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Traits;

use Hillpy\MiniProgramSDK\Libraries\Common\Common;

trait FileTrait
{
    private static $fileOptions = [
        'prefix' => 'cache_',
        'file_base_path' => '',
        'file_ext' => 'php',
    ];

    public static function init($options = [])
    {
        self::$fileOptions = Common::updateArrayData(self::$fileOptions, $options);
    }

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

    private function makeDir()
    {

    }

    private function writeFile()
    {

    }

    private function readFile()
    {

    }
}