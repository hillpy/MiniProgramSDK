<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\NearbyPoiConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Param;

trait NearbyPoiTrait
{
    public function add($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$nearbyPoi[__FUNCTION__], $paramArr);

        $url = NearbyPoiConstant::HOST . NearbyPoiConstant::ADD_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function delete($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$nearbyPoi[__FUNCTION__], $paramArr);

        $url = NearbyPoiConstant::HOST . NearbyPoiConstant::DELETE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getList($paramArr = [])
    {
        $urlParamArr = Common::updateArrayData(Param::$nearbyPoi[__FUNCTION__], $paramArr);

        $url = NearbyPoiConstant::HOST . NearbyPoiConstant::GET_LIST_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function setShowStatus($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$nearbyPoi[__FUNCTION__], $paramArr);

        $url = NearbyPoiConstant::HOST . NearbyPoiConstant::SET_SHOW_STATUS_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
