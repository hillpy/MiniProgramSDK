# 微信小程序php后端开发包

[![issue](https://img.shields.io/github/issues/hillpy/MiniProgramSDK.svg)](https://github.com/hillpy/MiniProgramSDK/issues)
[![star](https://img.shields.io/github/stars/hillpy/MiniProgramSDK.svg)](https://github.com/hillpy/MiniProgramSDK)
[![fork](https://img.shields.io/github/forks/hillpy/MiniProgramSDK.svg)](https://github.com/hillpy/MiniProgramSDK)
[![license](https://img.shields.io/github/license/hillpy/MiniProgramSDK.svg)](https://github.com/hillpy/MiniProgramSDK/blob/master/LICENSE)

### 功能描述
#### 封装微信小程序php端相关接口，比如php端微信用户信息解密（即登陆功能）、获取sessionKey、获取小程序码等等。

### 安装方法

1. 下载[发行版](https://github.com/hillpy/MiniProgramSDK/releases)

2. 使用composer安装（推荐）

```
composer require hillpy/mini-program-sdk
```

### 使用方法

* 实例化开发包、accessToken获取及缓存

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
```

* 解密登录用户数据

```
// 解密登录用户数据
$paramArr['code'] = isset($_POST['code']) ? $_POST['code'] : '';
$paramArr['rawData'] = isset($_POST['rawData']) ? $_POST['rawData'] : '';
$paramArr['signature'] = isset($_POST['signature']) ? $_POST['signature'] : '';
$paramArr['encryptedData'] = isset($_POST['encryptedData']) ? $_POST['encryptedData'] : '';
$paramArr['iv'] = isset($_POST['iv']) ? $_POST['iv'] : '';
$paramArr['sessionKeyExpired'] = isset($_POST['sessionKeyExpired']) ? $_POST['sessionKeyExpired'] : '';

// sessionKeyExpired参数表示session_key是否过期（必须由前端判断），未过期则从缓存获取sessionKeyData
if ($paramArr['sessionKeyExpired'] != 1) {
    $sessionKeyData = $redis->get('miniprogram_jscode2session_appid_' . $appId);
    $sessionKeyDataArr = json_decode($sessionKeyData, true);
    $paramArr['sessionKey'] = $sessionKeyDataArr['sessionKey'];
    $paramArr['openId'] = $sessionKeyDataArr['openId'];
}

$res = $miniProgram->decryptData($paramArr);

if ($res['code'] == 100) {
    // 将sessionKeyData写入缓存
    $sessionKeyDataArr['sessionKey'] = $res['data']['sessionKey'];
    $sessionKeyDataArr['openId'] = $res['data']['data']['openId'];
    $redis->set('miniprogram_jscode2session_appid_' . $appId, json_encode($sessionKeyDataArr));

    echo '解密成功';
} else {
    echo $res['msg'];
}
```

* 获取无数量限制的小程序码

```
// 小程序码图片的保存路径
$path = '';
// 小程序码图片的保存名称
$filename = '';

// 小程序码接口所需参数
$paramArr['scene'] = '';
$paramArr['page'] = '';
$paramArr['width'] = '';
$paramArr['auto_color'] = '';
$paramArr['line_color'] = '';
$paramArr['is_hyaline'] = '';

// 请求小程序码接口
$res = $miniProgram->getWXACodeUnlimit($paramArr);

// 打开文件并写入二进制流，生成图片
$file = fopen($path . $filename, 'w');
fwrite($file, $res);
fclose($file);
```

### TODO

~~1. 微信用户数据解密~~

~~2. 小程序二维码、小程序码~~

3. 模板消息

4. 统一服务消息

5. 动态消息

6. 客服消息

7. 数据分析

8. 附近的小程序

9. 插件管理

10. 内容安全

### 仓库地址

[Coding](https://coding.net/u/shinn_lancelot/p/MiniProgramSDK/git "MiniProgramSDK")<br>
[Gitee](https://gitee.com/hillpy/MiniProgramSDK "MiniProgramSDK")<br>
[Github](https://github.com/hillpy/MiniProgramSDK "MiniProgramSDK")<br>

### 协议

[MIT](https://github.com/hillpy/MiniProgramSDK/blob/master/LICENSE "MIT")<br>
