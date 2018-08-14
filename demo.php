<?php

use hillpy\MiniProgramSDK;

$appid = '';
$appsecret = '';

$MiniProgramSDK = new MiniProgramSDK($appid, $appsecret);

$params['code'] = '';
$params['rawData'] = '';
$params['signature'] = '';
$params['encryptedData'] = '';
$params['iv'] = '';
$res = $MiniProgramSDK->login($params);

if ($res['code'] == 100) {
    echo '登录成功';
} else {
    echo $res['msg'];
}