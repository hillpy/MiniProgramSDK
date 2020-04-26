<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\BaseConstant;
use Hillpy\MiniProgramSDK\Helpers\Helpers;
use Hillpy\MiniProgramSDK\Param;

trait BaseTrait
{
    public function getAccessToken($paramArr = [])
    {
        $urlParamArr = Helpers::updateArrayData(Param::$getAccessToken, $paramArr);
        $url = BaseConstant::HOST . BaseConstant::ACCESS_TOKEN_PATH . http_build_query($urlParamArr);
        return json_decode(Helpers::httpRequest($url), true);
    }
}
