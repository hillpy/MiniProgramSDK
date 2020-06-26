<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface ImmediateDeliveryInterface
{
    public function reOrder();
    public function abnormalConfirm();
    public function addOrder();
    public function addTip();
    public function bindAccount();
    public function cancelOrder();
    public function getAllImmeDelivery();
    public function getBindAccount();
    public function getOrder();
    public function mockUpdateOrder();
    public function openDelivery();
    public function preAddOrder();
    public function preCancelOrder();
    public function realMockUpdateOrder();
    public function updateOrder();
}
