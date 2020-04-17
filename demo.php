<?php

/**
 * 使用案例
 * 注意：实际项目若使用composer安装的库，请先引入自动加载脚本（require __DIR__ . '/vender/autoload.php';），此例子中直接引用类库。另外需安装redis扩展并开启redis服务。
 */
require __DIR__ . '/src/MiniProgram.php';

use hillpy\MiniProgramSDK\MiniProgram;

// 设置变量。
$appId = '小程序APPID';
$appSecret = '小程序APPSECRET';
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

// 客户端请求参数。
$paramArr['code'] = isset($_POST['code']) ? $_POST['code'] : '';
$paramArr['rawData'] = isset($_POST['rawData']) ? $_POST['rawData'] : '';
$paramArr['signature'] = isset($_POST['signature']) ? $_POST['signature'] : '';
$paramArr['encryptedData'] = isset($_POST['encryptedData']) ? $_POST['encryptedData'] : '';
$paramArr['iv'] = isset($_POST['iv']) ? $_POST['iv'] : '';
$sessionCacheKey = isset($_POST['sessionCacheKey']) ? $_POST['sessionCacheKey'] : '';

// sessionCacheKey为sessionKey缓存名的一部分。若存在，则从缓存获取。否则，从接口请求。
$sessionCacheKey && $paramArr['sessionKey'] = $redis->get('miniprogram_session_key_appid_' . $appId . '_key_' . $sessionCacheKey);

$res = $miniProgram->decryptData($paramArr);

if ($res['code'] == 100) {
    if (!$sessionCacheKey) {
        // 将sessionKey写入缓存，过期时间尽量长一些，此处缓存30天。
        $sessionCacheKey = '随机生成字符串';
        $redis->setex('miniprogram_session_key_appid_' . $appId . '_key_' . $sessionCacheKey, $res['data']['sessionKey'], 3600 * 24 * 30);
    }

    // data为解密后的数据。可根据解密数据，做相关处理。如登录注册，并生成jwt。然后将jwt、sessionCacheKey、用户信息返回给小程序端
    $data = $res['data']['data'];

    echo '解密成功';
} else {
    echo $res['msg'];
}

