<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface AnalysisInterface
{
    public function getDailyRetain();
    public function getMonthlyRetain();
    public function getWeeklyRetain();
    public function getDailySummary();
    public function getDailyVisitTrend();
    public function getMonthlyVisitTrend();
    public function getWeeklyVisitTrend();
    public function getUserPortrait();
    public function getVisitDistribution();
    public function getVisitPage();
}
