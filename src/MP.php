<?php

namespace Hillpy\MiniProgramSDK;

use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Interfaces\AuthInterface;
use Hillpy\MiniProgramSDK\Traits\AuthTrait;

class MP implements
    AuthInterface
{
    use AuthTrait;

    // MP类实例
    private static $instance;

    // 配置选项
    private $options = [
        'app_id' => '',
        'app_secret' => '',
        'cache_driver' => 'file',
        'cache_file_path' => '',
        'cache_prefix' => 'mp_sdk_',
    ];

    // 接口调用凭证
    private $token;

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

            // 从缓存获取token
            
            // // 若过期，则重新请求获取
            // $res = $this->getAccessToken(['appid' => $this->options['app_id'], 'secret' => $this->options['app_secret']]);
            // if (!isset($res['errcode'])) {
            //     $this->token = $res['access_token'];
                
            //     // 缓存token
            // }
        }
    }

    public function setOptions($options = [])
    {
        if (
            is_array($options) &&
            count($options) > 0
        ) {
            $this->options = Common::updateArrayData($this->options, $options);
        }

        return $this;
    }

    public function getOptions()
    {
        return $this->options;
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
