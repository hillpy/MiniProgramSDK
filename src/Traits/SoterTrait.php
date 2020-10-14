<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Common;
use Hillpy\MiniProgramSDK\Constants\SoterConstant;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\SoterParam;

trait SoterTrait
{
    public function verifySignature($paramArr = [])
    {
        $finalParamArr = Common::handleParam(SoterParam::$soter[__FUNCTION__], $paramArr);

        $url = SoterConstant::HOST . SoterConstant::VERIFY_SIGNATURE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        unset($finalParamArr['access_token']);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
