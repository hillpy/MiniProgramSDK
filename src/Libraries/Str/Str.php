<?php

namespace Hillpy\MiniProgramSDK\Libraries\Curl;

class Str
{
    /**
     * 获取字符串
     *
     * @param int $type
     * @param int $length
     * @return string
     */
    public static function getNonce($type = 1, $length = 16)
    {
        $nonce = '';
        switch ($type) {
            case 1:
                $string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                break;
            case 2:
                $string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                break;
            case 3:
                $string = '0123456789';
                break;
            default:
                $string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        }
        for ($i = 0; $i < $length; $i++) {
            $nonce .= substr($string, mt_rand(0, strlen($string) - 1), 1);
        }
        return $nonce;
    }

    /**
     * 根据URandom获取字符串
     *
     * @param int $length
     * @return bool|string
     */
    public static function getNonceByURandom($length = 16)
    {
        $nonce = '';
        $binary = '';
        $fp = @fopen('/dev/urandom', 'rb');
        if ($fp !== false) {
            $binary .= @fread($fp, $length);
            @fclose($fp);
        } else {
            trigger_error('Can not open /dev/urandom.');
        }
        $string = base64_encode($binary);
        $nonce = substr($string, 0, $length);
        return $nonce;
    }
}
