<?php

namespace Hillpy\MiniProgramSDK\Errors;

class DecryptionError
{
    const OK = 0;
    const ERROR_SESSION_KEY = -40001;
    const ERROR_IV = -40002;
    const ERROR_BUFFER = -41003;
}
