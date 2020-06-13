<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface PluginManagerInterface
{
    public function applyPlugin();
    public function getPluginDevApplyList();
    public function getPluginList();
    public function setDevPluginApplyStatus();
    public function unbindPlugin();
}
