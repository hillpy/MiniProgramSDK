<?php

namespace Hillpy\MiniProgramSDK\Tests;

use Hillpy\MiniProgramSDK\MP;

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
