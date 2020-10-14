<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Common;
use Hillpy\MiniProgramSDK\Constants\WxacodeConstant;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\WxacodeParam;

trait WxacodeTrait
{
    public function createQRCode($paramArr = [])
    {
        $finalParamArr = Common::handleParam(WxacodeParam::$wxacode[__FUNCTION__], $paramArr);

        $url = WxacodeConstant::HOST . WxacodeConstant::CREATE_QR_CODE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        unset($finalParamArr['access_token']);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function get($paramArr = [])
    {
        $finalParamArr = Common::handleParam(WxacodeParam::$wxacode[__FUNCTION__], $paramArr);

        $url = WxacodeConstant::HOST . WxacodeConstant::GET_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        unset($finalParamArr['access_token']);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getUnlimited($paramArr = [])
    {
        $finalParamArr = Common::handleParam(WxacodeParam::$wxacode[__FUNCTION__], $paramArr);

        $url = WxacodeConstant::HOST . WxacodeConstant::GET_UNLIMITED_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        unset($finalParamArr['access_token']);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
