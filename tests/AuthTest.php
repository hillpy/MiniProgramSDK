<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    use BaseTrait;

    public function testGetAccessToken()
    {
        $mp = $this->getMPInstance();
        print PHP_EOL;
        print $mp->getToken();
    }
}