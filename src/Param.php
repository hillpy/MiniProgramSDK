<?php

namespace Hillpy\MiniProgramSDK;

class Param
{
    public static $auth = [
        'code2Session' => [
            'appid' => '',
            'secret' => '',
            'js_code' => '',
            'grant_type' => 'authorization_code',
        ],
        'getPaidUnionId' => [
            'access_token' => '',
            'openid' => '',
            'transaction_id' => '',
            'mch_id' => '',
            'out_trade_no' => '',
        ],
        'getAccessToken' => [
            'grant_type' => 'client_credential',
            'appid' => '',
            'secret' => '',
        ],
    ];

    public static $decryption = [
        'decryptUserInfo' => [
            'code' => '',
            'rawData' => '',
            'signature' => '',
            'encryptedData' => '',
            'iv' => '',
            'appid' => '',
        ],
        'decryptPhone' => [
            'code' => '',
            'rawData' => '',
            'encryptedData' => '',
            'appid' => '',
        ],
    ];

    public static $analysis = [
        'getDailyRetain' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getMonthlyRetain' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getWeeklyRetain' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getDailySummary' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getDailyVisitTrend' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getMonthlyVisitTrend' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getWeeklyVisitTrend' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getUserPortrait' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getVisitDistribution' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
        'getVisitPage' => [
            'access_token' => '',
            'begin_date' => '',
            'end_date' => '',
        ],
    ];
}
