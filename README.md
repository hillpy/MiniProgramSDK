# 微信小程序php后端开发包

### 功能描述
#### 封装微信小程序php端相关接口，比如php端微信用户信息解密（即登陆功能）、获取sessionKey等等。主要功能为后端用户信息解密。

### 安装方法

1. 直接克隆项目或者下载已发行的版本

2. 使用composer安装（推荐）

```
composer require hillpy/mini-program-sdk
```

### 使用方法

* 以下为代码实例

```
use hillpy\MiniProgramSDK\MiniProgram;

$appid = '';
$appsecret = '';

$MiniProgram = new MiniProgram($appid, $appsecret);

$params['code'] = '';
$params['rawData'] = '';
$params['signature'] = '';
$params['encryptedData'] = '';
$params['iv'] = '';

/**
 * 调用解密用户信息功能
 * 登录成功后，返回的数组包含code、msg、data三个元素
 * data又包含session3rd（缓存标识名）、sessionKey（通过微信接口获取，用于解密用户信息）、data（用户信息数组，比如昵称、头像等）
 * 之后建议将用户信息存库，并根据session3rd缓存用户信息。
 * session3rd可理解为用户登录令牌token，session3rd需返回给小程序端
 */
$res = $MiniProgram->decryptData($params);


if ($res['code'] == 100) {
    echo '登录成功';
} else {
    echo $res['msg'];
}
```
