<?php

return array(
    'decryptData'=>array(
        'sessionKey'=>'',
        'openId'=>'',
        'code'=>'',
        'rawData'=>'',
        'signature'=>'',
        'encryptedData'=>'',
        'iv'=>''
    ),
    'createWXAQRCode'=>array(
        'path'=>'',
        'width'=>430
    ),
    'getWXACode'=>array(
        'path'=>'',
        'width'=>430,
        'auto_color'=>false,
        'line_color'=>array('r'=>0, 'g'=>0, 'b'=>0),
        'is_hyaline'=>false
    ),
    'getWxacodeUnlimit'=>array(
        'scene'=>'',
        'page'=>'page/index/index',
        'width'=>430,
        'auto_color'=>false,
        'line_color'=>array('r'=>0, 'g'=>0, 'b'=>0),
        'is_hyaline'=>false
    )
);