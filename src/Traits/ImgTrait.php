<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\ImgConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Param;

trait ImgTrait
{
    public function aiCrop($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$img[__FUNCTION__], $paramArr);

        $url = ImgConstant::HOST . ImgConstant::AI_CROP_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function scanQRCode($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$img[__FUNCTION__], $paramArr);

        $url = ImgConstant::HOST . ImgConstant::SCAN_QRCODE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function superresolution($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$img[__FUNCTION__], $paramArr);

        $url = ImgConstant::HOST . ImgConstant::SUPERRESOLUTION_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
