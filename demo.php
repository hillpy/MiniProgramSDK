<?php

use hillpy\MiniProgramSDK\MiniProgram;

$appid = '';
$appsecret = '';

$MiniProgram = new MiniProgram($appid, $appsecret);

$params['code'] = '';
$params['rawData'] = '';
$params['signature'] = '';
$params['encryptedData'] = '';
$params['iv'] = '';
$res = $MiniProgram->decryptData($params);

if ($res['code'] == 100) {
    echo '解密成功';
} else {
    echo $res['msg'];
}