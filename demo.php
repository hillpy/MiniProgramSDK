<?php

/**
 * 使用案例
 * 注意：实际项目若使用composer安装的库，请先引入自动加载脚本（require __DIR__ . '/vender/autoload.php';），此例子中直接引用类库。另外需安装redis扩展并开启redis服务。
 */
require __DIR__ . '/src/MiniProgram.php';

use hillpy\MiniProgramSDK\MiniProgram;

// 设置变量。
$appId = '';
$appSecret = '';
$accessToken = '';

// 从redis获取accessToken。
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$accessToken = $redis->get('miniprogram_access_token_appid_' . $appId);

// 实例化MiniProgram。
$miniProgram = new MiniProgram($appId, $appSecret, $accessToken);

//若缓存中不存在accessToken，从新实例化对象中获取并写入redis。
if (!$accessToken) {
    isset($miniProgram->accessTokenData['access_token']) && $accessToken = $miniProgram->accessTokenData['access_token'];

    if ($accessToken) {
        // 获取的expires_in为秒时间戳，减去30秒（过期时间适当提前避免accessToken实际已失效）。
        if (isset($miniProgram->accessTokenData['expires_in'])) {
            $cacheTime = $miniProgram->accessTokenData['expires_in'] - 30;
        } else {
            $cacheTime = 0;
        }
        $redis->setex('miniprogram_access_token_appid_' . $appId, $cacheTime, $accessToken);
    }
}

// 输出accessToken。
if ($accessToken == '') {
    echo 'accessToken获取失败<br>';
} else {
    echo 'accessToken:' . $accessToken . '<br>';
}

// 解密登录用户数据。
$paramArr['code'] = isset($_POST['code']) ? $_POST['code'] : '';
$paramArr['rawData'] = isset($_POST['rawData']) ? $_POST['rawData'] : '';
$paramArr['signature'] = isset($_POST['signature']) ? $_POST['signature'] : '';
$paramArr['encryptedData'] = isset($_POST['encryptedData']) ? $_POST['encryptedData'] : '';
$paramArr['iv'] = isset($_POST['iv']) ? $_POST['iv'] : '';
$paramArr['sessionKeyExpired'] = isset($_POST['sessionKeyExpired']) ? $_POST['sessionKeyExpired'] : '';

// sessionKeyExpired参数表示session_key是否过期（必须由前端判断），未过期则从缓存获取sessionKeyData。
if ($paramArr['sessionKeyExpired'] != 1) {
    $sessionKeyData = $redis->get('miniprogram_jscode2session_appid_' . $appId);
    $sessionKeyDataArr = json_decode($sessionKeyData, true);
    $paramArr['sessionKey'] = $sessionKeyDataArr['sessionKey'];
    $paramArr['openId'] = $sessionKeyDataArr['openId'];
}

$res = $miniProgram->decryptData($paramArr);

if ($res['code'] == 100) {
    // 将sessionKeyData写入缓存。
    $sessionKeyDataArr['sessionKey'] = $res['data']['sessionKey'];
    $sessionKeyDataArr['openId'] = $res['data']['data']['openId'];
    $redis->set('miniprogram_jscode2session_appid_' . $appId, json_encode($sessionKeyDataArr));

    echo '解密成功';
} else {
    echo $res['msg'];
}

