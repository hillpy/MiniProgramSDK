<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\CustomerServiceMessageConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Param;

trait CustomerServiceMessageTrait
{
    public function getTempMedia($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(Param::$customerServiceMessage[__FUNCTION__], $paramArr);

        $url = CustomerServiceMessageConstant::HOST . CustomerServiceMessageConstant::GET_TEMP_MEDIA_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function send($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$customerServiceMessage[__FUNCTION__], $paramArr);

        $url = CustomerServiceMessageConstant::HOST . CustomerServiceMessageConstant::SEND_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function setTyping($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$customerServiceMessage[__FUNCTION__], $paramArr);

        $url = CustomerServiceMessageConstant::HOST . CustomerServiceMessageConstant::SET_TYPING_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function uploadTempMedia($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$customerServiceMessage[__FUNCTION__], $paramArr);

        $url = CustomerServiceMessageConstant::HOST . CustomerServiceMessageConstant::UPLOAD_TEMP_MEDIA_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
