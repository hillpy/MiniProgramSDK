<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\BaseConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Param;

trait BaseTrait
{
    public function getAccessToken($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(Param::$getAccessToken, $paramArr);
        $url = BaseConstant::HOST . BaseConstant::ACCESS_TOKEN_PATH . http_build_query($urlParamArr);
        return json_decode(Curl::httpRequest($url), true);
    }
}
