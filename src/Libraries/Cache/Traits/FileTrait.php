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

    private static $allowExt = [
        'php',
        'json'
    ];

    public static function init($options = [])
    {
        if (
            is_array($options) &&
            count($options) > 0
        ) {
            self::$fileOptions = Common::updateArrayData(self::$fileOptions, $options);
        }
        self::$fileOptions['file_base_path'] || self::$fileOptions['file_base_path'] = $_SERVER['DOCUMENT_ROOT'];
        in_array(self::$fileOptions['file_ext'], self::$allowExt) || self::$fileOptions['file_ext'] = 'php';
    }

    public static function set($key = '', $value = '', $expire)
    {
        // 完整路径
        $allPath = self::$fileOptions['file_base_path'] . self::$fileOptions['file_path'];
        // 创建目录
        self::makeDir($allPath);
        // 获取文件名
        $filename = self::filename(self::$fileOptions['key']);
        // 获取写入内容
        $content = self::handleContent($key, $value, $expire);
        // 写入文件
        self::writeFile($allPath . '/' . $filename, $content);
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

    private static function handleContent($key, $content, $expire)
    {
        $contentArr = [
            'key' => Common::encryptData($key, self::$fileOptions['key']),
            'content' => Common::encryptData($content, self::$fileOptions['key']),
            'expire' => ($expire || $expire === 0) ? $expire : self::$fileOptions['expire'],
            'time' => time()
        ];

        $allContent = '';
        foreach (self::$allowExt as $v) {
            if (self::$fileOptions['file_ext'] == $v && $v == 'php') {
                $allContent = '<?php return \'' . json_encode($contentArr) . '\';';
                break;
            } else if (self::$fileOptions['file_ext'] == $v && $v == 'json') {
                $allContent = json_encode($contentArr);
                break;
            } else {
                $allContent = json_encode($contentArr);
                break;
            }
        }

        return $allContent;
    }

    private static function writeFile($filename, $content)
    {
        return file_put_contents($filename, $content);
    }

    private static function readFile($filename)
    {
        return file_get_contents($filename);
    }
}