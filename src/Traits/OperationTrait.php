<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\OperationConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Param;

trait OperationTrait
{
    public function getJsErrSearch($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$operation[__FUNCTION__], $paramArr);

        $url = OperationConstant::HOST . OperationConstant::GET_JS_ERR_SEARCH_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getPerformance($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$operation[__FUNCTION__], $paramArr);

        $url = OperationConstant::HOST . OperationConstant::GET_PERFORMANCE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getSceneList($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(Param::$operation[__FUNCTION__], $paramArr);

        $url = OperationConstant::HOST . OperationConstant::GET_SCENE_LIST_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getVersionList($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(Param::$operation[__FUNCTION__], $paramArr);

        $url = OperationConstant::HOST . OperationConstant::GET_VERSION_LIST_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function realtimeLogSearch($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(Param::$operation[__FUNCTION__], $paramArr);

        $url = OperationConstant::HOST . OperationConstant::REALTIME_LOG_SEARCH_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }
}
