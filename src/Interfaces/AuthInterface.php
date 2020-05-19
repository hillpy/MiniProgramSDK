<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface AuthInterface
{
    public function code2Session();
    public function getPaidUnionId();
    public function getAccessToken();
}
