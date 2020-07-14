<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Traits;

use Hillpy\MiniProgramSDK\Libraries\Common\Common;

trait MemcachedTrait
{
    use CommonTrait;

    private static $memcachedOptions = [
        'prefix' => 'cache_',
        'key' => 'cache',
        'expire' => 3600,
        'host' => '127.0.0.1',
        'port' => 11211
    ];

    private static $memcached;

    public static function init($options = [])
    {
        if (
            is_array($options) &&
            count($options) > 0
        ) {
            self::$memcachedOptions = Common::updateArrayData(self::$memcachedOptions, $options);
        }

        if (extension_loaded('memcached')) {
            self::$memcached = new \Memcached();
            self::$memcached->addServer(self::$memcachedOptions['host'], self::$memcachedOptions['port']);
        } elseif (extension_loaded('memcache')) {
            self::$memcached = new \Memcache();
            self::$memcached->connect(self::$memcachedOptions['host'], self::$memcachedOptions['port']);
        }
    }

    public static function set($key = '', $value = '', $expire)
    {
        $res = false;
        if (
            !$key ||
            !$value
        ) {
            return $res;
        }

        $key = self::generateKey(self::$memcachedOptions['prefix'], self::$memcachedOptions['key'], $key);
        $value = self::encryptValue($value, self::$memcachedOptions['key']);
        $expire = ($expire || $expire === 0) ? $expire : self::$memcachedOptions['expire'];

        $res = self::$memcached->set($key, $value, $expire);

        return $res;
    }

    public static function get($key = '')
    {
        $value = '';
        if (!$key) {
            return $value;
        }
        $key = self::generateKey(self::$memcachedOptions['prefix'], self::$memcachedOptions['key'], $key);
        $value = self::decryptValue(self::$memcached->get($key), self::$memcachedOptions['key']);
        return $value;
    }

    public static function delete($key = '')
    {
        $res = false;
        if (!$key) {
            return $res;
        }
        $key = self::generateKey(self::$memcachedOptions['prefix'], self::$memcachedOptions['key'], $key);
        $res = self::$memcached->delete($key);
        return $res;
    }

    public static function clear()
    {
        return self::$memcached->flush();
    }
}
