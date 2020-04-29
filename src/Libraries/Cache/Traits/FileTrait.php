<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Traits;

use Hillpy\MiniProgramSDK\Libraries\Common\Common;

trait FileTrait
{
    private static $fileOptions = [
        'prefix' => 'cache_',
        'key' => 'cache',
        'expire' => 3600,
        'file_base_path' => '',
        'file_path' => '/cache',
        'file_ext' => 'php',
    ];

    public static function init($options = [])
    {
        self::$fileOptions = Common::updateArrayData(self::$fileOptions, $options);
        self::$fileOptions['file_base_path'] || self::$fileOptions['file_base_path'] = $_SERVER['DOCUMENT_ROOT'];
    }

    public static function set($key = '', $value = '', $expire = 0)
    {
        // 完整路径
        $allPath = self::$fileOptions['file_base_path'] . self::$fileOptions['file_path'];
        // 创建目录
        self::makeDir($allPath);
    }

    public static function get($key = '')
    {
        echo 'file get' . PHP_EOL;
    }

    public static function delete($key = '')
    {
        echo 'file delete' . PHP_EOL;
    }

    private static function makeDir($path)
    {
        is_dir($path) || mkdir($path, 0777, true);
    }

    private static function filename($key)
    {
        $filename = '';
        $name = md5(self::$fileOptions['key'] . $key);
        $filename = self::$fileOptions['prefix'] . $name . '.' . self::$fileOptions['file_ext'];
        return $filename;
    }

    private function writeFile()
    {

    }

    private function readFile()
    {

    }
}