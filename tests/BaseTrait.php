<?php

namespace Tests;

use Hillpy\MiniProgramSDK\MP;
use Tests\Env;

trait BaseTrait
{
    public function getMPInstance()
    {
        $options = [
            'app_id' => Env::$mp['app_id'],
            'app_secret' => Env::$mp['app_secret']
        ];

        return MP::getInstance($options);
    }
}