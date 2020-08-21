<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\ImmediateDeliveryConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\ImmediateDeliveryParam;

trait ImmediateDeliveryTrait
{
    public function reOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::RE_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function abnormalConfirm($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::ABNORMAL_CONFIRM_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function addOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::ADD_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function addTip($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::ADD_TIP_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function bindAccount($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::BIND_ACCOUNT_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function cancelOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::CANCEL_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getAllImmeDelivery($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::GET_ALL_IMME_DELIVERY_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getBindAccount($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::GET_BIND_ACCOUNT_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::GET_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function mockUpdateOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::MOCK_UPDATE_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function openDelivery($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::OPEN_DELIVERY_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function preAddOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::PRE_ADD_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function preCancelOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::PRE_CANCEL_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function realMockUpdateOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::REAL_MOCK_UPDATE_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function updateOrder($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(ImmediateDeliveryParam::$immediateDelivery[__FUNCTION__], $paramArr);

        $url = ImmediateDeliveryConstant::HOST . ImmediateDeliveryConstant::UPDATE_ORDER_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
