<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\AuthConstant;

trait AuthTrait
{
    public function login()
    {
        echo 'login' . PHP_EOL;
        echo AuthConstant::HOST . AuthConstant::JSCODE_2_SESSSION_PATH . PHP_EOL;
    }
}