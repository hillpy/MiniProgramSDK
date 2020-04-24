<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\BaseConstant;

trait BaseTrait
{
    public function getAccessToken()
    {
        echo 'getAccessToken' . PHP_EOL;
        echo BaseConstant::HOST . BaseConstant::ACCESS_TOKEN_PATH . PHP_EOL;
    }
}