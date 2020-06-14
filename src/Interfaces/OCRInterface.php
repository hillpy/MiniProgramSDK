<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface OCRInterface
{
    public function bankCard();
    public function businessLicense();
    public function driverLicense();
    public function idCard();
    public function printedText();
    public function vehicleLicense();
}
