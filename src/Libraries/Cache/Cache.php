<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache;

use Hillpy\MiniProgramSDK\Libraries\Cache\Interfaces\CacheInterface;
use Hillpy\MiniProgramSDK\Libraries\Cache\Traits\FileTrait;
use Hillpy\MiniProgramSDK\Libraries\Cache\Traits\RedisTrait;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;

class Cache implements CacheInterface
{
    use FileTrait;
    use RedisTrait;

    // Cache类实例
    private static $instance;

    // 配置参数
    private $options = [
        'driver' => 'file',
        'expire' => 3600,
        'prefix' => 'cache_',
        'file_base_path' => '',
        'file_path' => '/cache',
        'file_ext' => 'php'
    ];

    /**
     * 允许使用的驱动类型
     *
     * @var array
     */
    private $allowDriverArr = [
        'file',
        'redis'
    ];

    /**
     * 驱动trait数组
     *
     * @var array
     */
    private $driverTraitArr = [
        'file' => FileTrait::class,
        'redis' => RedisTrait::class
    ];

    // 驱动trait
    private $driver;

    public static function getInstance($options = [])
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($options);
        } else {
            self::$instance->init($options);
        }

        return self::$instance;
    }

    private function __construct($options = [])
    {
        $this->init($options);
    }

    private function __clone()
    {
    }

    private function init($options = [])
    {
        if (
            is_array($options) &&
            count($options) > 0
        ) {
            $this->options = Common::updateArrayData($this->options, $options);
        }

        in_array($this->options['driver'], $this->allowDriverArr) || $this->options['driver'] = 'file';

        $this->driver = $this->driverTraitArr[$this->options['driver']];
        $this->driver::init($this->options);
    }

    public function set($key = '', $value = '', $expire = 0)
    {
        $this->driver::set($key, $value, $expire);
    }

    public function get($key = '')
    {
        $this->driver::get($key);
    }

    public function delete($key = '')
    {
        $this->driver::delete($key);
    }
}
