<?php

use Hillpy\MiniProgramSDK\Libraries\Cache\Cache;
use Hillpy\MiniProgramSDK\MP;

include __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', true);
error_reporting(E_ALL);

// 测试小程序开发包
$option = [
  'app_id' => 'wx1bdc5f0c74eb8a64',
  'app_secret' => 'f9407291812252a890faf770b46b6b25'
];
$mp = MP::getInstance($option);
echo $mp->getToken();
echo PHP_EOL;
echo $mp->code2Session();

// 测试缓存库
// $cacheOption = [
//   'driver' => 'file',
// ];
// $cache = Cache::getInstance($cacheOption);
// $cache->set('name', 'shinn_lancelot', 0);
// echo $cache->get('name');