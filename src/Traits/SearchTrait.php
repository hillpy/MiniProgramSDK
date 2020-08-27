<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\SearchConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\SearchParam;

trait SearchTrait
{
    public function imageSearch($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(SearchParam::$search[__FUNCTION__], $paramArr);

        $url = SearchConstant::HOST . SearchConstant::IMAGE_SEARCH_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr, false), true);
    }

    public function siteSearch($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(SearchParam::$search[__FUNCTION__], $paramArr);

        $url = SearchConstant::HOST . SearchConstant::SITE_SEARCH_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function submitPages($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(SearchParam::$search[__FUNCTION__], $paramArr);

        $url = SearchConstant::HOST . SearchConstant::SUBMIT_PAGES_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
