<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Common;
use Hillpy\MiniProgramSDK\Constants\AuthConstant;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\AuthParam;

trait AuthTrait
{
    public function code2Session($paramArr = [])
    {
        $urlParamArr = Common::handleParam(AuthParam::$auth[__FUNCTION__], $paramArr);

        if (
            isset($this->options['app_id']) &&
            $this->options['app_id']
        ) {
            $urlParamArr['appid'] = $this->options['app_id'];
        }

        if (
            isset($this->options['app_secret']) &&
            $this->options['app_secret']
        ) {
            $urlParamArr['secret'] = $this->options['app_secret'];
        }

        $url = AuthConstant::HOST . AuthConstant::CODE_2_SESSSION_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getPaidUnionId($paramArr = [])
    {
        $urlParamArr = Common::handleParam(AuthParam::$auth[__FUNCTION__], $paramArr);

        $url = AuthConstant::HOST . AuthConstant::GET_PAID_UNION_ID_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getAccessToken($paramArr = [])
    {
        $urlParamArr = Common::handleParam(AuthParam::$auth[__FUNCTION__], $paramArr);

        $url = AuthConstant::HOST . AuthConstant::GET_ACCESS_TOKEN_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }
}
