<?php

namespace Hillpy\MiniProgramSDK;

class CacheKey
{
    public static $prefix = 'mp_appid_{$app_id}_';
    public static $code2Session = 'code_2_session_{$code_2_session_key}';
    public static $accessToken = 'access_token';
}
