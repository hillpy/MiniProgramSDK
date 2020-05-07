<?php

namespace Hillpy\MiniProgramSDK;

use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Interfaces\AuthInterface;
use Hillpy\MiniProgramSDK\Libraries\Cache\Cache;
use Hillpy\MiniProgramSDK\Traits\AuthTrait;

class MP implements
    AuthInterface
{
    use AuthTrait;

    // MP类实例
    private static $instance;

    // Cache类实例
    private static $cache;

    // 配置选项
    private $options = [
        'app_id' => '',
        'app_secret' => '',
        'cache_driver' => 'file',
        'cache_prefix' => 'mp_sdk_',
        'cache_key' => 'miniprogram_sdk',
        'cache_expire' => 3600,
        'cache_file_base_path' => '',
        'cache_file_path' => '/mpsdk_cache',
        'cache_file_ext' => 'php'
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
        }
        $this->options['cache_file_base_path'] || $this->options['cache_file_base_path'] = $_SERVER['DOCUMENT_ROOT'];

        self::$cache = $this->initCache();

        // 从缓存获取token
        $this->token = self::$cache->get('access_token_mp_appid_' . $this->options['app_id']);

        // 若过期，则重新请求获取
        if (!$this->token) {
            $res = $this->getAccessToken(['appid' => $this->options['app_id'], 'secret' => $this->options['app_secret']]);
            if (!isset($res['errcode'])) {
                $this->token = $res['access_token'];
                
                // 缓存token
                self::$cache->set('access_token_mp_appid_' . $this->options['app_id'], $this->token, $res['expires_in'] - 5);
            }
        }
        echo $this->token;
    }

    private function initCache()
    {
        $cacheOption = [
            'driver' => $this->options['cache_driver'],
            'prefix' => $this->options['cache_prefix'],
            'key' => $this->options['cache_key'],
            'expire' => $this->options['cache_expire'],
            'file_base_path' => $this->options['cache_file_base_path'],
            'file_path' => $this->options['cache_file_path'],
            'file_ext' => $this->options['cache_file_ext']
        ];
        return Cache::getInstance($cacheOption);
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
