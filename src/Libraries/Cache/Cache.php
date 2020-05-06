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
        'prefix' => 'cache_',
        'key' => 'cache',
        'expire' => 3600,
        'file_base_path' => '',
        'file_path' => '/cache',
        'file_ext' => 'php'
    ];

    /**
     * 允许使用的驱动类型
     *
     * @var array
     */
    private $allowDriver = [
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

    /**
     * 允许传入的文件扩展
     *
     * @var array
     */
    private $allowFileExt = [
        'php',
        'json'
    ];

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
        $this->options['file_base_path'] || $this->options['file_base_path'] = $_SERVER['DOCUMENT_ROOT'];
        in_array($this->options['file_ext'], $this->allowFileExt) || $this->options['file_ext'] = 'php';
        in_array($this->options['driver'], $this->allowDriver) || $this->options['driver'] = 'file';

        $this->driver = $this->driverTraitArr[$this->options['driver']];
        $this->driver::init($this->options);
    }

    public function set($key = '', $value = '', $expire = '')
    {
        return $this->driver::set($key, $value, $expire);
    }

    public function get($key = '')
    {
        return $this->driver::get($key);
    }

    public function delete($key = '')
    {
        return $this->driver::delete($key);
    }
}
