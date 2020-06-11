<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Constants\AnalysisConstant;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Libraries\Curl\Curl;
use Hillpy\MiniProgramSDK\Param;

trait AnalysisTrait
{
    public function getDailyRetain($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$analysis[__FUNCTION__], $paramArr);

        $url = AnalysisConstant::HOST . AnalysisConstant::GET_WE_ANALYSIS_APPID_DAILY_RETAIN_INFO_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getMonthlyRetain($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$analysis[__FUNCTION__], $paramArr);

        $url = AnalysisConstant::HOST . AnalysisConstant::GET_WE_ANALYSIS_APPID_MONTHLY_RETAIN_INFO_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getWeeklyRetain($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$analysis[__FUNCTION__], $paramArr);

        $url = AnalysisConstant::HOST . AnalysisConstant::GET_WE_ANALYSIS_APPID_WEEKLY_RETAIN_INFO_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getDailySummary($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$analysis[__FUNCTION__], $paramArr);

        $url = AnalysisConstant::HOST . AnalysisConstant::GET_WE_ANALYSIS_APPID_DAILY_SUMMARY_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getDailyVisitTrend($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$analysis[__FUNCTION__], $paramArr);

        $url = AnalysisConstant::HOST . AnalysisConstant::GET_WE_ANALYSIS_APPID_DAILY_VISIT_TREND_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getMonthlyVisitTrend($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$analysis[__FUNCTION__], $paramArr);

        $url = AnalysisConstant::HOST . AnalysisConstant::GET_WE_ANALYSIS_APPID_MONTHLY_VISIT_TREND_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getWeeklyVisitTrend($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$analysis[__FUNCTION__], $paramArr);

        $url = AnalysisConstant::HOST . AnalysisConstant::GET_WE_ANALYSIS_APPID_WEEKLY_VISIT_TREND_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getUserPortrait($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$analysis[__FUNCTION__], $paramArr);

        $url = AnalysisConstant::HOST . AnalysisConstant::GET_WE_ANALYSIS_APPID_USER_PORTRAIT_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getVisitDistribution($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$analysis[__FUNCTION__], $paramArr);

        $url = AnalysisConstant::HOST . AnalysisConstant::GET_WE_ANALYSIS_APPID_VISIT_DISTRIBUTION_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function getVisitPage($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$analysis[__FUNCTION__], $paramArr);

        $url = AnalysisConstant::HOST . AnalysisConstant::GET_WE_ANALYSIS_APPID_VISIT_PAGE_PATH . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
