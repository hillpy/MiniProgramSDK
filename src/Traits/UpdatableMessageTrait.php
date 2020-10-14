<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Common;
use Hillpy\MiniProgramSDK\Constants\UpdatableMessageConstant;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\UpdatableMessageParam;

trait UpdatableMessageTrait
{
    public function createActivityId($paramArr = [])
    {
        $urlParamArr = Common::handleParam(UpdatableMessageParam::$updatableMessage[__FUNCTION__], $paramArr);

        $url = UpdatableMessageConstant::HOST . UpdatableMessageConstant::CREATE_ACTIVITY_ID_PATH . http_build_query(['access_token' => $urlParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function setUpdatableMsg($paramArr = [])
    {
        $finalParamArr = Common::handleParam(UpdatableMessageParam::$updatableMessage[__FUNCTION__], $paramArr);

        $url = UpdatableMessageConstant::HOST . UpdatableMessageConstant::SET_UPDATABLE_MSG_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        unset($finalParamArr['access_token']);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
