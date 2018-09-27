# 微信小程序php后端开发包

### 功能描述
#### 封装微信小程序php端相关接口，比如php端微信用户信息解密（即登陆功能）、获取sessionKey等等。主要功能为后端用户信息解密。

### 安装方法

1. 下载[发行版](https://github.com/hillpy/MiniProgramSDK/releases)

2. 使用composer安装（推荐）

```
composer require hillpy/mini-program-sdk
```

### 使用方法

* 以下为代码实例

```
/**
 * 使用案例
 * 注意：实际项目若使用composer安装的库，请先引入自动加载脚本（require __DIR__ . '/vender/autoload.php';）。另外需安装redis扩展并开启redis服务
 */
use hillpy\MiniProgramSDK\MiniProgram;

// 设置变量
$appId = '';
$appSecret = '';
$accessToken = '';

// 从redis获取accessToken;
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$accessToken = $redis->get('miniprogram_access_token_appid_' . $appId);

// 实例化MiniProgram
$miniProgram = new MiniProgram($appId, $appSecret, $accessToken);

//若缓存中不存在accessToken，从新实例化对象中获取并写入redis
if (!$accessToken) {
    isset($miniProgram->accessTokenData['access_token']) && $accessToken = $miniProgram->accessTokenData['access_token'];

    if ($accessToken) {
        // 获取的expires_in为秒时间戳，减去30秒（过期时间适当提前避免accessToken实际已失效）
        if (isset($miniProgram->accessTokenData['expires_in'])) {
            $cacheTime = $miniProgram->accessTokenData['expires_in'] - 30;
        } else {
            $cacheTime = 0;
        }
        $redis->setex('miniprogram_access_token_appid_' . $appId, $cacheTime, $accessToken);
    }
}

// 输出accessToken
if ($accessToken == '') {
    echo 'accessToken获取失败<br>';
} else {
    echo 'accessToken:' . $accessToken . '<br>';
}

$paramArr['code'] = '';
$paramArr['rawData'] = '';
$paramArr['signature'] = '';
$paramArr['encryptedData'] = '';
$paramArr['iv'] = '';
$res = $miniProgram->decryptData($paramArr);

if ($res['code'] == 100) {
    echo '解密成功';
} else {
    echo $res['msg'];
}
```
