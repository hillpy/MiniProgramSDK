<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface LogisticsInterface
{
    public function batchGetOrder();
    public function addOrder();
    public function bindAccount();
    public function cancelOrder();
    public function getAllAccount();
    public function getAllDelivery();
    public function getOrder();
    public function getPath();
    public function getPrinter();
    public function getQuota();
    public function testUpdateOrder();
    public function updatePrinter();
    public function getContact();
    public function previewTemplate();
    public function updateBusiness();
    public function updatePath();
}
