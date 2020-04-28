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
    private $config = [
        'driver' => 'file',
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

    public static function getInstance($config = [])
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($config);
        } else {
            self::$instance->init($config);
        }

        return self::$instance;
    }

    private function __construct($config = [])
    {
        $this->init($config);
    }

    private function __clone()
    {
    }

    private function init($config = [])
    {
        if (
            is_array($config) &&
            count($config) > 0
        ) {
            $this->config = Common::updateArrayData($this->config, $config);

            $this->driver = $this->driverTraitArr[$this->config['driver']];
        }
    }

    public function set($key = '', $value = '', $expire = 0)
    {
        $this->driver::set();
    }

    public function get($key = '')
    {
        $this->driver::get();
    }

    public function delete($key = '')
    {
        $this->driver::delete();
    }
}
