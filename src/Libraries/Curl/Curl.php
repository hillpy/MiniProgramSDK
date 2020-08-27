<?php

namespace Hillpy\MiniProgramSDK\Libraries\Curl;

class Curl
{
    /**
     * 简易get请求
     *
     * @param string $url
     * @return mixed
     */
    public static function get($url = '')
    {
        $curl = curl_init();
        $optionArr = [
            CURLOPT_URL => $url,
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
        ];
        curl_setopt_array($curl, $optionArr);
        $res = curl_exec($curl);
        curl_close($curl);
        return $res;
    }

    /**
     * 简易post请求
     *
     * @param string $url
     * @param string $data
     * @return mixed
     */
    public static function post($url = '', $data = '')
    {
        $curl = curl_init();
        $optionArr = [
            CURLOPT_URL => $url,
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data,
        ];
        curl_setopt_array($curl, $optionArr);
        $res = curl_exec($curl);
        curl_close($curl);
        return $res;
    }

    /**
     * 简易http请求，调用当前类的get和post方法
     *
     * @param string $url
     * @param array $postParamData
     * @param boolean $encodeParam
     * @return void
     */
    public static function httpRequest($url = '', $postParamData = [], $encodeParam = true)
    {
        if (
            is_array($postParamData) &&
            count($postParamData) > 0
        ) {
            $res = self::post($url, $encodeParam ? json_encode($postParamData) : $postParamData);
        } else if ($postParamData) {
            $res = self::post($url, $postParamData);
        } else {
            $res = self::get($url);
        }

        return $res;
    }
}
