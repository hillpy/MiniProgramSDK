<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface SecurityInterface
{
    public function imgSecCheck();
    public function mediaCheckAsync();
    public function msgSecCheck();
}
