<?php

/**
 * 通用函数类
 */
namespace hillpy\MiniProgramSDK;

class Common
{
    /**
     * http请求函数
     * @param $url
     * @param null $data
     * @return mixed
     */
    public static function httpRequest($url, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        if (!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

    /**
     * 是否为windows系统
     * @return bool
     */
    public static function isWin()
    {
        if (strtoupper(substr(PHP_OS,0,3)) === 'WIN') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 获取字符串
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
     * 根据错误码获取错误信息
     * @param $errorCode
     * @return string
     */
    public static function getErrorMsg($errorCode)
    {
        switch ($errorCode) {
            case '40029':
                $errorMsg = 'code 非法';
                break;
            case '-41001':
                $errorMsg = 'sessionKey 非法';
                break;
            case '-41002':
                $errorMsg = 'iv 非法';
                break;
            case '-41003':
                $errorMsg = '解密失败';
                break;
            case '41008':
                $errorMsg = '缺少code参数';
                break;
            default:
                $errorMsg = '操作失败，错误码：' . $errorCode;
        }
        return $errorMsg;
    }
}

