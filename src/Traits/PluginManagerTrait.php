<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\PluginManagerConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\PluginManagerParam;

trait PluginManagerTrait
{
    public function applyPlugin($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(PluginManagerParam::$pluginManager[__FUNCTION__], $paramArr);

        $url = PluginManagerConstant::HOST . PluginManagerConstant::APPLY_PLUGIN_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getPluginDevApplyList($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(PluginManagerParam::$pluginManager[__FUNCTION__], $paramArr);

        $url = PluginManagerConstant::HOST . PluginManagerConstant::GET_PLUGIN_DEV_APPLY_LIST_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getPluginList($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(PluginManagerParam::$pluginManager[__FUNCTION__], $paramArr);

        $url = PluginManagerConstant::HOST . PluginManagerConstant::GET_PLUGIN_LIST_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function setDevPluginApplyStatus($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(PluginManagerParam::$pluginManager[__FUNCTION__], $paramArr);

        $url = PluginManagerConstant::HOST . PluginManagerConstant::SET_DEV_PLUGIN_APPLY_STATUS_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function unbindPlugin($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(PluginManagerParam::$pluginManager[__FUNCTION__], $paramArr);

        $url = PluginManagerConstant::HOST . PluginManagerConstant::UNBIND_PLUGIN_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
