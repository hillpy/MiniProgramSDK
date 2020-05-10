<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\AuthConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Param;

trait AuthTrait
{
    public function getAccessToken($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(Param::$auth['getAccessToken'], $paramArr);
        $url = AuthConstant::HOST . AuthConstant::ACCESS_TOKEN_PATH . http_build_query($urlParamArr);
        return json_decode(Curl::httpRequest($url), true);
    }

    public function code2Session($paramArr = [])
    {
        echo 'this is code2Session method'; echo PHP_EOL;
    }
}
