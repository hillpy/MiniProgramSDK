<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface AuthInterface
{
    public function getAccessToken();
    public function code2Session();
}
