<?php

/**
 * 微信小程序api封装类
 * Author: shinn_lancelot
 */
namespace hillpy;

class MiniProgramApi
{
    private $appId = '';
    private $appSecret = '';

    /**
     * MiniProgramApi constructor.
     * @param $appId
     * @param $appSecret
     */
    public function __construct($appId, $appSecret)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
    }

    /**
     * 小程序登录封装
     * @param array $params
     * @return mixed
     */
    public function login($params = array())
    {
        // 初始化返回数据
        $res['code'] = -100;
        $res['msg'] = '操作失败';
        $res['data'] = array();

        // 1.获取openid、session_key
        $sessionData = $this->jscode2Session($params['code']);
        if (isset($sessionData['errcode'])) {
            $res['code'] = -101;
            $res['msg'] = 'sessionKey获取失败';
            return $res;
        }
        $openid = $sessionData['openid'];
        $sessionKey = $sessionData['session_key'];

        // 2.计算签名并与传入签名进行校验
        $newSignature = sha1($params['rawData'] . $sessionKey);
        if ($newSignature !== $params['signature']) {
            $res['code'] = -102;
            $res['msg'] = '签名不匹配';
            return $res;
        }

        // 3.使用sessionKey解密加密数据包
        include_once "wxBizDataCrypt/wxBizDataCrypt.php";
        $pc = new \WXBizDataCrypt($this->appId, $sessionKey);
        $errCode = $pc->decryptData($params['encryptedData'], $params['iv'], $data);
        if (!empty($errCode)) {
            $res['code'] = -103;
            $res['msg'] = '解密有误';
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
     * 获取openid、sessionKey接口
     * @param $code
     * @return mixed
     */
    public function jscode2Session($code)
    {
        $url = 'https://api.weixin.qq.com/sns/jscode2session?appid=' . $this->appId . '&secret=' . $this->appSecret . '&js_code=' . $code . '&grant_type=authorization_code';
        $res = json_decode($this->https_request($url),true);
        return $res;
    }

    /**
     * http请求函数
     * @param $url
     * @param null $data
     * @return mixed
     */
    private function https_request($url, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
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
        if($length1 <= 0){
            $length1 = 6;
        }

        $chars = "abcdefghijklmnopqrstuvwxyz";
        $str1 = "";
        for ( $i = 0; $i < $length1; $i++ )  {
            $str1 .= substr($chars, mt_rand(0, strlen($chars)-1), 1);
        }
        $str = $str1.$str2;

        return $str;
    }
}