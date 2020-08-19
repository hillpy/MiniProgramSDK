<?php

namespace Hillpy\MiniProgramSDK\Tests;

use PHPUnit\Framework\TestCase;

class AnalysisTest extends TestCase
{
    use BaseTrait;

    public function testGetDailyRetain()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'begin_date' => date('Ymd', strtotime('-1 day')),
            'end_date' => date('Ymd', strtotime('-1 day')),
        ];
        echo PHP_EOL;
        var_dump($mp->getDailyRetain($paramArr));
    }

    public function testGetMonthlyRetain()
    {
        $mp = $this->getMPInstance();
        $beginDate = date('Y-m-01', strtotime('-1 month'));
        $endDate = date('Y-m-d', strtotime("$beginDate +1 month -1 day"));
        $paramArr = [
            'access_token' => $mp->getToken(),
            'begin_date' => $beginDate,
            'end_date' => $endDate,
        ];
        echo PHP_EOL;
        var_dump($mp->getMonthlyRetain($paramArr));
    }

    public function testGetWeeklyRetain()
    {
        $mp = $this->getMPInstance();
        $week = (date('w') + 6) % 7;
        $week += 7;
        $beginDate = date('Y-m-d', strtotime("-$week day"));
        $endDate = date('Y-m-d', strtotime("$beginDate +6 day"));
        $paramArr = [
            'access_token' => $mp->getToken(),
            'begin_date' => $beginDate,
            'end_date' => $endDate,
        ];
        echo PHP_EOL;
        var_dump($mp->getWeeklyRetain($paramArr));
    }

    public function testGetDailySummary()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'begin_date' => date('Ymd', strtotime('-1 day')),
            'end_date' => date('Ymd', strtotime('-1 day')),
        ];
        echo PHP_EOL;
        var_dump($mp->getDailySummary($paramArr));
    }

    public function testGetDailyVisitTrend()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'begin_date' => date('Ymd', strtotime('-1 day')),
            'end_date' => date('Ymd', strtotime('-1 day')),
        ];
        echo PHP_EOL;
        var_dump($mp->getDailyVisitTrend($paramArr));
    }

    public function testGetMonthlyVisitTrend()
    {
        $mp = $this->getMPInstance();
        $beginDate = date('Y-m-01', strtotime('-1 month'));
        $endDate = date('Y-m-d', strtotime("$beginDate +1 month -1 day"));
        $paramArr = [
            'access_token' => $mp->getToken(),
            'begin_date' => $beginDate,
            'end_date' => $endDate,
        ];
        echo PHP_EOL;
        var_dump($mp->getMonthlyVisitTrend($paramArr));
    }

    public function testGetWeeklyVisitTrend()
    {
        $mp = $this->getMPInstance();
        $week = (date('w') + 6) % 7;
        $week += 7;
        $beginDate = date('Y-m-d', strtotime("-$week day"));
        $endDate = date('Y-m-d', strtotime("$beginDate +6 day"));
        $paramArr = [
            'access_token' => $mp->getToken(),
            'begin_date' => $beginDate,
            'end_date' => $endDate,
        ];
        echo PHP_EOL;
        var_dump($mp->getWeeklyVisitTrend($paramArr));
    }

    public function testGetUserPortrait()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'begin_date' => date('Ymd', strtotime('-30 day')),
            'end_date' => date('Ymd', strtotime('-1 day')),
        ];
        echo PHP_EOL;
        var_dump($mp->getUserPortrait($paramArr));
    }

    public function testGetVisitDistribution()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'begin_date' => date('Ymd', strtotime('-1 day')),
            'end_date' => date('Ymd', strtotime('-1 day')),
        ];
        echo PHP_EOL;
        var_dump($mp->getVisitDistribution($paramArr));
    }

    public function testGetVisitPage()
    {
        $mp = $this->getMPInstance();
        $paramArr = [
            'access_token' => $mp->getToken(),
            'begin_date' => date('Ymd', strtotime('-1 day')),
            'end_date' => date('Ymd', strtotime('-1 day')),
        ];
        echo PHP_EOL;
        var_dump($mp->getVisitPage($paramArr));
    }
}
