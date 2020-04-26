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
    private $token;

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
            $this->config = Helpers::updateArrayData($this->config, $config);

            // 从缓存获取token
            
            // 若过期，则重新请求获取
            $res = $this->getAccessToken(['appid' => $this->config['app_id'], 'secret' => $this->config['app_secret']]);
            if (!isset($res['errcode'])) {
                $this->token = $res['access_token'];
                
                // 缓存token
            }
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

    public function setToken($token = '')
    {
        $this->token = $token;
        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }
}
