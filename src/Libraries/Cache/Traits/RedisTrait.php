<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Traits;

use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Predis\Client;

trait RedisTrait
{
    use CommonTrait;

    private static $redisOptions = [
        'prefix' => 'cache_',
        'key' => 'cache',
        'expire' => 3600,
        'host' => '127.0.0.1',
        'port' => 6379
    ];

    private static $redis;

    public static function init($options = [])
    {
        if (
            is_array($options) &&
            count($options) > 0
        ) {
            self::$redisOptions = Common::updateArrayData(self::$redisOptions, $options);
        }

        if (extension_loaded('redis')) {
            self::$redis = new \Redis();
            self::$redis->connect(self::$redisOptions['host'], self::$redisOptions['port']);
        } else {
            self::$redis = new Client([
                'scheme' => 'tcp',
                'host' => self::$redisOptions['host'],
                'port' => self::$redisOptions['port'],
            ]);
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

        $key = self::generateKey(self::$redisOptions['prefix'], self::$redisOptions['key'], $key);
        $value = self::encryptValue($value, self::$redisOptions['key']);
        $expire = ($expire || $expire === 0) ? $expire : self::$redisOptions['expire'];

        if ($expire > 0) {
            $res = self::$redis->setex($key, $expire, $value);
        } else {
            $res = self::$redis->set($key, $value);
        }

        return $res;
    }

    public static function get($key = '')
    {
        $value = '';
        if (!$key) {
            return $value;
        }
        $key = self::generateKey(self::$redisOptions['prefix'], self::$redisOptions['key'], $key);
        $value = self::decryptValue(self::$redis->get($key), self::$redisOptions['key']);
        return $value;
    }

    public static function delete($key = '')
    {
        $res = false;
        if (!$key) {
            return $res;
        }
        $key = self::generateKey(self::$redisOptions['prefix'], self::$redisOptions['key'], $key);
        $res = self::$redis->del($key);
        return $res;
    }

    public static function clear()
    {
        return self::$redis->flushdb();
    }
}
