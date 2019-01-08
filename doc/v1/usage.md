## 如何使用

在安装完本开发包之后，需要引入本开发包。若是通过composer安装的，则只需引入你的项目目录下的vender目录（composer包存放的目录）下的autoload.php即可。若是通过直接拷贝项目的方式，则需在项目中引入MiniProgram.php文件。

### 实例化操作及其它准备

1. 添加命名空间。如下：

    ```PHP
    use hillpy\MiniProgramSDK\MiniProgram;
    ```

2. 实例化MiniProgram。实例化时需要传入小程序的appId和appSecret，以及accessToken三个参数。其中accessToken为小程序全局唯一后台接口调用凭据，若不传此参数，则将会调用微信接口来获取accessToken数据。若传入此参数且不为空，则不会通过微信接口来获取accessToken数据。故请自行缓存accessToken。示例代码如下：

    ```PHP
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
    ```

3. 缓存accessToken。此参数为小程序全局唯一后台接口调用凭据，需要自行缓存，以便多次使用。在实例化之后进行缓存，示例代码如下：

    ```PHP
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
    ```

### 解密微信用户的加密数据包

示例代码如下，其中小程序端需传递sessionKeyExpired参数（表示session_key是否过期，此判断由小程序端通过wx.checkSession接口进行）到此接口。

```PHP
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
```

### 获取小程序二维码

微信接口将返回小程序二维码图片的二进制流。本开发包将直接返回此二进制流。然后自行将二进制流写入图片文件即可。示例代码如下：

```PHP
// 设置文件路径和文件名。
$filepath = '/wxaqrcode/';
$allPath = $_SERVER['DOCUMENT_ROOT'] . $filepath;
$filename = time() . '_' . uniqid() . '.png';

// 获取设置参数。
$path = $_POST['path'];
$width = $_POST['width'];

$paramArr['path'] = $path;
$width && $paramArr['width'] = $width;

// 请求接口
$res = $miniProgram->createWXAQRCode($paramArr);

// 写入文件相关操作
if (!is_dir($allPath)) {
    mkdir($allPath, 0777, true);
}
$file = fopen($allPath . $filename,"w");
fwrite($file, $res);
fclose($file);

$result['code'] = 1;
$result['msg'] = '操作成功';
$result['data'] = $filepath . $filename;
echo json_encode($result);
```

### 获取有数量限制的小程序码

除设置参数意外，其它同获取小程序二维码接口。示例代码如下：

```PHP
$filepath = '/wxacode/';
$allPath = $_SERVER['DOCUMENT_ROOT'] . $filepath;
$filename = time() . '_' . uniqid() . '.png';

$path = $_POST['path'];
$width = $_POST['width'];
$autoColor = $_POST['autoColor'];
$lineColor = $_POST['lineColor'];
$isHyaline = $_POST['isHyaline'];

$paramArr['path'] = $path;
$width && $paramArr['width'] = $width;
$autoColor && $paramArr['auto_color'] = $autoColor;
$lineColor && $paramArr['line_color'] = $lineColor;
$isHyaline && $paramArr['is_hyaline'] = $isHyaline;
$res = $miniProgram->getWXAcode($paramArr);

if (!is_dir($allPath)) {
    mkdir($allPath, 0777, true);
}
$file = fopen($allPath . $filename,"w");
fwrite($file, $res);
fclose($file);

$result['code'] = 1;
$result['msg'] = '操作成功';
$result['data'] = $filepath . $filename;
echo json_encode($result);
```

### 获取无数量限制的小程序码

除设置参数意外，其它同获取小程序二维码接口。示例代码如下：

```PHP
$path = '/wxacodeunlimit/';
$allPath = $_SERVER['DOCUMENT_ROOT'] . $path;
$filename = time() . '_' . uniqid() . '.png';

$scene = $_POST['scene'];
$page = $_POST['page'];
$width = $_POST['width'];
$autoColor = $_POST['autoColor'];
$lineColor = $_POST['lineColor'];
$isHyaline = $_POST['isHyaline'];

$paramArr['scene'] = $scene;
$paramArr['page'] = $page;
$width && $paramArr['width'] = $width;
$autoColor && $paramArr['auto_color'] = $autoColor;
$lineColor && $paramArr['line_color'] = $lineColor;
$isHyaline && $paramArr['is_hyaline'] = $isHyaline;
$res = $miniProgram->getWxacodeUnlimit($paramArr);

if (!is_dir($allPath)) {
    mkdir($allPath, 0777, true);
}
$file = fopen($allPath . $filename,"w");
fwrite($file, $res);
fclose($file);

$result['code'] = 1;
$result['msg'] = '操作成功';
$result['data'] = $path . $filename;
echo json_encode($result);
```