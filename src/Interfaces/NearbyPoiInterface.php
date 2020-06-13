<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface NearbyPoiInterface
{
    public function add();
    public function delete();
    public function getList();
    public function setShowStatus();
}
