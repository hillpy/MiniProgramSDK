<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Interfaces;

interface CacheInterface
{
    public function set($key, $value, $expire);
    public function get($key);
    public function delete($key);
    public function deleteAll();
}
