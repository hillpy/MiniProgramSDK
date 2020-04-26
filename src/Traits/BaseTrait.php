<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\BaseConstant;
use Hillpy\MiniProgramSDK\Helpers\Helpers;
use Hillpy\MiniProgramSDK\Param;

trait BaseTrait
{
    public function setAccessToken($accessToken = '')
    {
        return $this;
    }

    public function getAccessToken($paramArr = [])
    {
        $urlParamArr = Helpers::updateArrayData(Param::$getAccessToken['url_param'], $paramArr);
        $url = BaseConstant::HOST . BaseConstant::ACCESS_TOKEN_PATH . http_build_query($urlParamArr);
        $res = json_decode(Helpers::httpRequest($url), true);
    }
}
