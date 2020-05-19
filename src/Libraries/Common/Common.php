<?php

namespace Hillpy\MiniProgramSDK\Libraries\Common;

class Common
{
    /**
     * 是否为windows系统
     *
     * @return bool
     */
    public static function isWin()
    {
        if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 更新原数组的数据（仅更新原数组已有的键）
     *
     * @param $rawData
     * @param $newData
     * @return array
     */
    public static function updateArrayData($rawData, $newData)
    {
        if (!is_array($rawData) || count($rawData) <= 0) {
            return [];
        }
        if (!is_array($newData)) {
            return $rawData;
        }
        foreach ($rawData as $key => $value) {
            if (isset($newData[$key])) {
                if (is_array($value)) {
                    $rawData[$key] = self::updateArrayData($rawData[$key], $newData[$key]);
                } else {
                    $rawData[$key] = $newData[$key];
                }
            }
        }
        return $rawData;
    }

    public static function encryptData($content, $key, $iv = '', $k = '')
    {
        $key = md5($key);
        $iv || $iv = substr($key, 0, 16);
        $k || $k = substr($key, 16);
        return base64_encode(openssl_encrypt($content, 'AES-128-CBC', $k, OPENSSL_RAW_DATA, $iv));
    }

    public static function decryptData($content, $key, $iv = '', $k = '')
    {
        $key = md5($key);
        $iv || $iv = substr($key, 0, 16);
        $k || $k = substr($key, 16);
        return openssl_decrypt(base64_decode($content), 'AES-128-CBC', $k, OPENSSL_RAW_DATA, $iv);
    }

    public static function parseStr($str = '', $varArr = [])
    {
        if (!$str) {
            return $str;
        }

        if (count($varArr) > 0) {
            foreach ($varArr as $key => $value) {
                ${$key} = $value;
            }
        }

        return eval('return "' . $str . '";');
    }
}
