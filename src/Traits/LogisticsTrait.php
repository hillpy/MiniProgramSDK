<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\LogisticsConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\LogisticsParam;

trait LogisticsTrait
{
    public function batchGetOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::BATCH_GET_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function addOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::ADD_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function bindAccount($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::BIND_ACCOUND_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function cancelOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::CANCEL_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getAllAccount($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::GET_ALL_ACCOUNT_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getAllDelivery($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::GET_ALL_DELIVERY_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::GET_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getPath($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::GET_PATH_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getPrinter($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::GET_PRINTER_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getQuota($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::GET_QUOTA_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function testUpdateOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::TEST_UPDATE_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function updatePrinter($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::UPDATE_PRINTER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getContact($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::GET_CONTACT_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function previewTemplate($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::PRIVIEW_TEMPLATE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function updateBusiness($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::UPDATE_BUSINESS_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function updatePath($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(LogisticsParam::$logistics[__FUNCTION__], $paramArr);

        $url = LogisticsConstant::HOST . LogisticsConstant::UPDATE_PATH_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
