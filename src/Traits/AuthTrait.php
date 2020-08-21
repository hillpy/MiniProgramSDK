<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\AuthConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\AuthParam;

trait AuthTrait
{
    public function code2Session($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(AuthParam::$auth[__FUNCTION__], $paramArr);

        $url = AuthConstant::HOST . AuthConstant::CODE_2_SESSSION_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getPaidUnionId($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(AuthParam::$auth[__FUNCTION__], $paramArr);

        $url = AuthConstant::HOST . AuthConstant::GET_PAID_UNION_ID_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getAccessToken($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(AuthParam::$auth[__FUNCTION__], $paramArr);

        $url = AuthConstant::HOST . AuthConstant::GET_ACCESS_TOKEN_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }
}
