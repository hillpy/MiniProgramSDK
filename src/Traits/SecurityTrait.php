<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\SecurityConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\SecurityParam;

trait SecurityTrait
{
    public function imgSecCheck($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(SecurityParam::$security[__FUNCTION__], $paramArr);

        $url = SecurityConstant::HOST . SecurityConstant::IMG_SEC_CHECK_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function mediaCheckAsync($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(SecurityParam::$security[__FUNCTION__], $paramArr);

        $url = SecurityConstant::HOST . SecurityConstant::MEDIA_CHECK_ASYSC_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function msgSecCheck($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(SecurityParam::$security[__FUNCTION__], $paramArr);

        $url = SecurityConstant::HOST . SecurityConstant::MSG_SEC_CHECK_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
