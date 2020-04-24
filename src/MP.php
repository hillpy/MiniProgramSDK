<?php

namespace Hillpy\MiniProgramSDK;

use Hillpy\MiniProgramSDK\Interfaces\AuthInterface;
use Hillpy\MiniProgramSDK\Interfaces\BaseInterface;
use Hillpy\MiniProgramSDK\Traits\AuthTrait;
use Hillpy\MiniProgramSDK\Traits\BaseTrait;

class MP implements 
    BaseInterface,
    AuthInterface
{
    use BaseTrait,
        AuthTrait;

    // 配置参数
    private $config = [
        'app_id' => '',
        'app_secret' => ''
    ];
    
    // MP类实例
    private static $instance;

    public static function getInstance($config)
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($config);
        }

        return self::$instance;
    }

    private function __construct($config)
    {
        echo '初始化MP' . PHP_EOL;
        print_r($config);
    }

    private function __clone()
    {
    }
}