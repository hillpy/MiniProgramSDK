<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\SoterConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Param;

trait SoterTrait
{
    public function verifySignature($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$soter[__FUNCTION__], $paramArr);

        $url = SoterConstant::HOST . SoterConstant::VERIFY_SIGNATURE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
