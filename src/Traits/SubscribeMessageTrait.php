<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Common;
use Hillpy\MiniProgramSDK\Constants\SubscribeMessageConstant;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Params\SubscribeMessageParam;

trait SubscribeMessageTrait
{
    public function addTemplate($paramArr = [])
    {
        $finalParamArr = Common::handleParam(SubscribeMessageParam::$subscribeMessage[__FUNCTION__], $paramArr);

        $url = SubscribeMessageConstant::HOST . SubscribeMessageConstant::ADD_TEMPLATE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        unset($finalParamArr['access_token']);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function deleteTemplate($paramArr = [])
    {
        $finalParamArr = Common::handleParam(SubscribeMessageParam::$subscribeMessage[__FUNCTION__], $paramArr);

        $url = SubscribeMessageConstant::HOST . SubscribeMessageConstant::DELETE_TEMPLATE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        unset($finalParamArr['access_token']);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getCategory($paramArr = [])
    {
        $urlParamArr = Common::handleParam(SubscribeMessageParam::$subscribeMessage[__FUNCTION__], $paramArr);

        $url = SubscribeMessageConstant::HOST . SubscribeMessageConstant::GET_CATEGORY_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getPubTemplateKeywordsById($paramArr = [])
    {
        $urlParamArr = Common::handleParam(SubscribeMessageParam::$subscribeMessage[__FUNCTION__], $paramArr);

        $url = SubscribeMessageConstant::HOST . SubscribeMessageConstant::GET_PUB_TEMPLATE_KEYWORDS_BY_ID_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getPubTemplateTitleList($paramArr = [])
    {
        $urlParamArr = Common::handleParam(SubscribeMessageParam::$subscribeMessage[__FUNCTION__], $paramArr);

        $url = SubscribeMessageConstant::HOST . SubscribeMessageConstant::GET_PUB_TEMPLATE_TITLE_LIST_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function getTemplateList($paramArr = [])
    {
        $urlParamArr = Common::handleParam(SubscribeMessageParam::$subscribeMessage[__FUNCTION__], $paramArr);

        $url = SubscribeMessageConstant::HOST . SubscribeMessageConstant::GET_TEMPLATE_LIST_PATH . http_build_query($urlParamArr);

        return json_decode(Curl::httpRequest($url), true);
    }

    public function send($paramArr = [])
    {
        $finalParamArr = Common::handleParam(SubscribeMessageParam::$subscribeMessage[__FUNCTION__], $paramArr);

        $url = SubscribeMessageConstant::HOST . SubscribeMessageConstant::SEND_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        unset($finalParamArr['access_token']);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
