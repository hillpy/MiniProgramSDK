<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\OCRConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\OCRParam;

trait OCRTrait
{
    public function bankCard($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(OCRParam::$OCR[__FUNCTION__], $paramArr);

        $url = OCRConstant::HOST . OCRConstant::BANK_CARD_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function businessLicense($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(OCRParam::$OCR[__FUNCTION__], $paramArr);

        $url = OCRConstant::HOST . OCRConstant::BUSINESS_LICENSE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function driverLicense($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(OCRParam::$OCR[__FUNCTION__], $paramArr);

        $url = OCRConstant::HOST . OCRConstant::DRIVER_LICENSE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function idCard($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(OCRParam::$OCR[__FUNCTION__], $paramArr);

        $url = OCRConstant::HOST . OCRConstant::ID_CARD_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function printedText($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(OCRParam::$OCR[__FUNCTION__], $paramArr);

        $url = OCRConstant::HOST . OCRConstant::PRINTED_TEXT_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function vehicleLicense($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(OCRParam::$OCR[__FUNCTION__], $paramArr);

        $url = OCRConstant::HOST . OCRConstant::VEHICLE_LICENSE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
