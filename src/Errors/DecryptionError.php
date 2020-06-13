<?php

namespace Hillpy\MiniProgramSDK\Errors;

class DecryptionError
{
    public static $OK = 0;
    public static $ErrorSessionKey = -41001;
    public static $ErrorIv = -41002;
    public static $ErrorBuffer = -41003;
}
