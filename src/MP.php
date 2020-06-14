<?php

namespace Hillpy\MiniProgramSDK;

use Hillpy\MiniProgramSDK\Interfaces\AnalysisInterface;
use Hillpy\MiniProgramSDK\Interfaces\AuthInterface;
use Hillpy\MiniProgramSDK\Interfaces\CustomerServiceMessageInterface;
use Hillpy\MiniProgramSDK\Interfaces\DecryptionInterface;
use Hillpy\MiniProgramSDK\Interfaces\ImgInterface;
use Hillpy\MiniProgramSDK\Interfaces\NearbyPoiInterface;
use Hillpy\MiniProgramSDK\Interfaces\OCRInterface;
use Hillpy\MiniProgramSDK\Interfaces\OperationInterface;
use Hillpy\MiniProgramSDK\Interfaces\PluginManagerInterface;
use Hillpy\MiniProgramSDK\Interfaces\SecurityInterface;
use Hillpy\MiniProgramSDK\Interfaces\UniformMessageInterface;
use Hillpy\MiniProgramSDK\Interfaces\UpdatableMessageInterface;
use Hillpy\MiniProgramSDK\Interfaces\WxacodeInterface;
use Hillpy\MiniProgramSDK\Libraries\Cache\Cache;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Str\Str;
use Hillpy\MiniProgramSDK\Traits\AnalysisTrait;
use Hillpy\MiniProgramSDK\Traits\AuthTrait;
use Hillpy\MiniProgramSDK\Traits\CustomerServiceMessageTrait;
use Hillpy\MiniProgramSDK\Traits\DecryptionTrait;
use Hillpy\MiniProgramSDK\Traits\ImgTrait;
use Hillpy\MiniProgramSDK\Traits\NearbyPoiTrait;
use Hillpy\MiniProgramSDK\Traits\OCRTrait;
use Hillpy\MiniProgramSDK\Traits\OperationTrait;
use Hillpy\MiniProgramSDK\Traits\PluginManagerTrait;
use Hillpy\MiniProgramSDK\Traits\SecurityTrait;
use Hillpy\MiniProgramSDK\Traits\UniformMessageTrait;
use Hillpy\MiniProgramSDK\Traits\UpdatableMessageTrait;
use Hillpy\MiniProgramSDK\Traits\WxacodeTrait;

class MP implements
    AnalysisInterface,
    AuthInterface,
    CustomerServiceMessageInterface,
    DecryptionInterface,
    ImgInterface,
    NearbyPoiInterface,
    OCRInterface,
    OperationInterface,
    PluginManagerInterface,
    SecurityInterface,
    UniformMessageInterface,
    UpdatableMessageInterface,
    WxacodeInterface
{
    use AnalysisTrait;
    use AuthTrait;
    use CustomerServiceMessageTrait;
    use DecryptionTrait;
    use ImgTrait;
    use NearbyPoiTrait;
    use OCRTrait;
    use OperationTrait;
    use PluginManagerTrait;
    use SecurityTrait;
    use UniformMessageTrait;
    use UpdatableMessageTrait;
    use WxacodeTrait;

    // MP类实例
    private static $instance;

    // 配置选项
    private $options = [
        'app_id' => '',
        'app_secret' => '',
        'cache_driver' => 'file',
        'cache_prefix' => 'mp_sdk_',
        'cache_key' => 'miniprogram_sdk',
        'cache_expire' => 3600 * 7,
        'cache_file_base_path' => '',
        'cache_file_path' => '/mpsdk_cache',
        'cache_file_ext' => 'php'
    ];

    // 接口调用凭证
    private $token;

    // Cache类实例
    private $cache;

    // 缓存key的前缀
    private $cacheKeyPrefix;

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

        // 获取Cache类实例
        $this->cache = $this->initCache();
        // 解析缓存key的通用前缀
        $this->cacheKeyPrefix = Common::parseStr(CacheKey::$prefix, ['app_id' => $this->options['app_id']]);
        // 获取accessToken
        $this->token = $this->getAccessTokenWithCache();
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

    private function parseCacheKey($key = '', $varArr = [])
    {
        if (!$key) {
            return $this->cacheKeyPrefix . $key;
        }

        $str = Common::parseStr($key, $varArr);

        return $this->cacheKeyPrefix . $str;
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

    public function code2SessionWithCache($paramArr = [])
    {
        // 从缓存获取code2Session数据
        $code2Session = '';
        $code2SessionKey = '';
        if (
            isset($paramArr['code_2_session_key']) &&
            $paramArr['code_2_session_key']
        ) {
            $code2SessionKey = $paramArr['code_2_session_key'];
            $code2Session = $this->cache->get($this->parseCacheKey(CacheKey::$code2Session, ['code_2_session_key' => $code2SessionKey]));
        }

        // 调用接口获取code2Session，并写入缓存
        if (!$code2Session) {
            $paramArr['appid'] = $this->options['app_id'];
            $paramArr['secret'] = $this->options['app_secret'];
            $res = $this->code2Session($paramArr);
            if (!isset($res['errcode']) || $res['errcode'] == 0) {
                $code2Session = json_encode($res);
                $code2SessionKey = Str::getNonce(1, 32);
                $this->cache->set($this->parseCacheKey(CacheKey::$code2Session, ['code_2_session_key' => $code2SessionKey]), $code2Session, $this->options['cache_expire']);
            } else {
                return [
                    'code_2_session' => $res,
                    'code_2_session_key' => ''
                ];
            }
        }

        return [
            'code_2_session' => is_array($code2Session) ? $code2Session : json_decode($code2Session, true),
            'code_2_session_key' => $code2SessionKey
        ];
    }

    public function getAccessTokenWithCache()
    {
        // 计算缓存名
        $accessTokenCacheKey = $this->parseCacheKey(CacheKey::$accessToken, ['app_id' => $this->options['app_id']]);

        // 从缓存获取accessToken
        $accessToken = $this->cache->get($accessTokenCacheKey);

        // 若过期，则重新请求获取
        if (!$accessToken) {
            $res = $this->getAccessToken(['appid' => $this->options['app_id'], 'secret' => $this->options['app_secret']]);
            if (!isset($res['errcode']) || $res['errcode'] == 0) {
                $accessToken = $res['access_token'];

                // 缓存token
                $this->cache->set($accessTokenCacheKey, $accessToken, $res['expires_in'] - 5);
            }
        }

        return $accessToken;
    }
}
