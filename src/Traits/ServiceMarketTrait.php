<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\ServiceMarketConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Param;

trait ServiceMarketTrait
{
    public function invokeService($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$serviceMarket[__FUNCTION__], $paramArr);

        $url = ServiceMarketConstant::HOST . ServiceMarketConstant::INVOKE_SERVICE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
