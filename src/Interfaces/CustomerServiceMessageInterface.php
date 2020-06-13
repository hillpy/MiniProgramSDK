<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface CustomerServiceMessageInterface
{
    public function getTempMedia();
    public function send();
    public function setTyping();
    public function uploadTempMedia();
}
