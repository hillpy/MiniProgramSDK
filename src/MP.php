<?php

namespace Hillpy\MiniProgramSDK;

use Hillpy\MiniProgramSDK\Helpers\Helpers;
use Hillpy\MiniProgramSDK\Interfaces\AuthInterface;
use Hillpy\MiniProgramSDK\Traits\AuthTrait;

class MP implements
    AuthInterface
{
    use AuthTrait;

    // MP类实例
    private static $instance;

    // 配置参数
    private $config = [
        'app_id' => '',
        'app_secret' => '',
        'cache_driver' => 'file',
        'cache_file_path' => '',
    ];

    // 接口调用凭证
    private $accessToken;

    public static function getInstance($config = [])
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($config);
        } else {
            self::$instance->initConfig($config);
        }

        return self::$instance;
    }

    private function __construct($config = [])
    {
        $this->initConfig($config);
    }

    private function __clone()
    {
    }

    private function initConfig($config = [])
    {
        if (
            is_array($config) &&
            count($config) > 0
        ) {
            $this->config = Helpers::updateArrayData($this->config, $config);
        }
    }

    public function setConfig($config = [])
    {
        if (
            is_array($config) &&
            count($config) > 0
        ) {
            $this->config = Helpers::updateArrayData($this->config, $config);
        }

        return $this;
    }

    public function getConfig()
    {
        return $this->config;
    }
}
