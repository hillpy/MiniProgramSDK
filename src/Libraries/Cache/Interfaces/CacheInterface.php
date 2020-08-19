<?php

namespace Hillpy\MiniProgramSDK\Libraries\Cache\Interfaces;

interface CacheInterface
{
    public function set();
    public function get();
    public function delete();
    public function clear();
}
