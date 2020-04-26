<?php

namespace Hillpy\MiniProgramSDK\Helpers\Curl;

trait Curl
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
        $optionArr = array(
            CURLOPT_URL => $url,
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true
        );
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
        $optionArr = array(
            CURLOPT_URL => $url,
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data
        );
        curl_setopt_array($curl, $optionArr);
        $res = curl_exec($curl);
        curl_close($curl);
        return $res;
    }

    /**
     * 简易http请求，调用当前类的get和post方法
     *
     * @param string $url
     * @param array $postParamArr
     * @return mixed
     */
    public static function httpRequest($url = '', $postParamArr = [])
    {
        if (
            is_array($postParamArr) &&
            count($postParamArr) > 0
        ) {
            $res = self::post($url, json_encode($postParamArr));
        } else {
            $res = self::get($url);
        }

        return $res;
    }
}