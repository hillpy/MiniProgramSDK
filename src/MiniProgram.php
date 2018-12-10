<?php

/**
 * 微信小程序api封装类
 * Author: shinn_lancelot
 */
namespace hillpy\MiniProgramSDK;

include "Common.php";

class MiniProgram
{
    private $appId = '';
    private $appSecret = '';
    private $accessToken = '';
    public $accessTokenData = array();

    const API_HOST = 'https://api.weixin.qq.com';
    const ACCESS_TOKEN_PATH = '/cgi-bin/token?';
    const JSCODE_2_SESSSION_PATH = '/sns/jscode2session?';
    const WXAQRCODE_PATH = '/cgi-bin/wxaapp/createwxaqrcode?';
    const WXACODE_PATH = '/wxa/getwxacode?';
    const WXACODE_UNLIMIT_PATH = '/wxa/getwxacodeunlimit?';

    /**
     * MiniProgram constructor.
     * @param $appId
     * @param $appSecret
     * @param string $accessToken
     */
    public function __construct($appId, $appSecret, $accessToken = '')
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
        if ($accessToken) {
            $this->accessToken = $accessToken;
        } else {
            $this->accessTokenData = $this->getAccessTokenData();
            $this->accessTokenData && $this->accessToken = $this->accessTokenData['access_token'];
        }
    }

    /**
     * 获取accessToken
     * @return mixed|string
     */
    public function getAccessTokenData()
    {
        $urlParamArr = array(
            'grant_type'=>'client_credential',
            'appid'=>$this->appId,
            'secret'=>$this->appSecret
        );
        $url = self::API_HOST . self::ACCESS_TOKEN_PATH . http_build_query($urlParamArr);
        $res = json_decode(Common::httpRequest($url), true);
        if ($res['errcode']) {
            return '';
        } else {
            return $res;
        }
    }

    /**
     * 获取openid、sessionKey
     * @param $code
     * @return mixed
     */
    public function jscode2Session($code)
    {
        $urlParamArr = array(
            'appid'=>$this->appId,
            'secret'=>$this->appSecret,
            'js_code'=>$code,
            'grant_type'=>'authorization_code'
        );
        $url = self::API_HOST . self::JSCODE_2_SESSSION_PATH . http_build_query($urlParamArr);
        $res = json_decode(Common::httpRequest($url),true);
        return $res;
    }

    /**
     * 解密微信用户的加密数据包
     * @param array $params
     * @return mixed
     */
    public function decryptData($paramArr = array())
    {
        // 初始化返回数据
        $res['code'] = -100;
        $res['msg'] = '操作失败';
        $res['data'] = array();

        // 1.获取openid、session_key
        $sessionData = $this->jscode2Session($paramArr['code']);
        if (isset($sessionData['errcode'])) {
            $res['code'] = -101;
            $res['msg'] = $this->getErrorMsg($sessionData['errcode']);
            return $res;
        }
        $openid = $sessionData['openid'];
        $sessionKey = $sessionData['session_key'];

        // 2.计算签名并与传入签名进行校验
        $newSignature = sha1($paramArr['rawData'] . $sessionKey);
        if ($newSignature !== $paramArr['signature']) {
            $res['code'] = -102;
            $res['msg'] = '签名不匹配';
            return $res;
        }

        // 3.使用sessionKey解密加密数据包
        include_once "wxBizDataCrypt/wxBizDataCrypt.php";
        $pc = new \WXBizDataCrypt($this->appId, $sessionKey);
        $errCode = $pc->decryptData($paramArr['encryptedData'], $paramArr['iv'], $data);
        if (!empty($errCode)) {
            $res['code'] = -103;
            $res['msg'] = $this->getErrorMsg($errCode);
            return $res;
        }

        // 4.生成3rd_session
        $data = json_decode($data, true);
        $session3rd = $this->getNonceStr(16);

        // 5.返回相关数据
        $res['code'] = 100;
        $res['msg'] = '操作成功';
        $resData['session3rd'] = $session3rd;
        $resData['data'] = $data;
        $resData['sessionKey'] = $sessionKey;
        $res['data'] = $resData;
        return $res;
    }

    /**
     * 获取小程序二维码
     * @param array $postParamArr
     * @return mixed
     */
    public function createWXAQRCode($postParamArr = array())
    {
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::WXAQRCODE_PATH . http_build_query($urlParamArr);
        $res = $this->http_request($url, json_encode($postParamArr));
        return $res;
    }

    /**
     * 获取小程序码
     * @param array $postParamArr
     * @return mixed
     */
    public function getWXACode($postParamArr = array())
    {
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::WXACODE_PATH . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($postParamArr));
        return $res;
    }

    /**
     * 获取小程序码（无数量限制）
     * @param array $postParamArr
     * @return mixed
     */
    public function getWxacodeUnlimit($postParamArr = array())
    {
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::WXACODE_UNLIMIT_PATH . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($postParamArr));
        return $res;
    }

    /**
     * 获取随机字符串
     * @param int $length
     * @return string
     */
    private function getNonceStr($length = 16)
    {
        $str2 = time();
        $length2 = strlen($str2);
        $length1 = $length - $length2;
        if ($length1 <= 0) {
            $length1 = 6;
        }

        $chars = "abcdefghijklmnopqrstuvwxyz";
        $str1 = "";
        for ($i = 0; $i < $length1; $i++) {
            $str1 .= substr($chars, mt_rand(0, strlen($chars)-1), 1);
        }
        $str = $str1 . $str2;

        return $str;
    }

    /**
     * 根据错误码获取错误信息
     * @param $errorCode
     * @return string
     */
    private function getErrorMsg($errorCode)
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