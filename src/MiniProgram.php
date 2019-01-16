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
    private $defaultParamInfo = array();
    public $accessTokenData = array();

    const API_HOST = 'https://api.weixin.qq.com';
    const ACCESS_TOKEN_PATH = '/cgi-bin/token?';
    const JSCODE_2_SESSSION_PATH = '/sns/jscode2session?';
    const WXAQRCODE_PATH = '/cgi-bin/wxaapp/createwxaqrcode?';
    const WXACODE_PATH = '/wxa/getwxacode?';
    const WXACODE_UNLIMIT_PATH = '/wxa/getwxacodeunlimit?';
    const ADD_TEMPLATE_PATH = '/cgi-bin/wxopen/template/add?';
    const DELETE_TEMPLATE_PATH = '/cgi-bin/wxopen/template/del?';
    const GET_TEMPLATE_LIBRARY_BY_ID_PATH = '/cgi-bin/wxopen/template/library/get?';
    const GET_TEMPLATE_LIBRARY_LIST_PATH = '/cgi-bin/wxopen/template/library/list?';
    const GET_TEMPLATE_LIST_PATH = '/cgi-bin/wxopen/template/list?';
    const SEND_TEMPLATE_MESSAGE = '/cgi-bin/message/wxopen/template/send?';
    const SEND_UNIFORM_MESSAGE = '/cgi-bin/message/wxopen/template/uniform_send?';

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
        $this->defaultParamInfo = include_once 'DefaultParamInfo.php';
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
        if (isset($res['errcode']) && $res['errcode']) {
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
        // 扩展原参数数组
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $paramArr);

        // 初始化返回数据
        $res['code'] = -100;
        $res['msg'] = '操作失败';
        $res['data'] = array();

        // 1.获取openid、session_key（若存在session_key，则默认理解为session_key未过期，直接使用其进行解密）
        if ($finalParamArr['sessionKey']) {
            $openId = $finalParamArr['openId'];
            $sessionKey = $finalParamArr['sessionKey'];
        } else {
            $sessionData = $this->jscode2Session($finalParamArr['code']);
            if (isset($sessionData['errcode'])) {
                $res['code'] = -101;
                $res['msg'] = Common::getErrorMsg($sessionData['errcode']);
                return $res;
            }
            $openId = $sessionData['openid'];
            $sessionKey = $sessionData['session_key'];
        }

        // 2.计算签名并与传入签名进行校验
        $newSignature = sha1($finalParamArr['rawData'] . $sessionKey);
        if ($newSignature !== $finalParamArr['signature']) {
            $res['code'] = -102;
            $res['msg'] = '签名不匹配';
            return $res;
        }

        // 3.使用sessionKey解密加密数据包
        include_once "wxBizDataCrypt/wxBizDataCrypt.php";
        $pc = new \WXBizDataCrypt($this->appId, $sessionKey);
        $errCode = $pc->decryptData($finalParamArr['encryptedData'], $finalParamArr['iv'], $data);
        if (!empty($errCode)) {
            $res['code'] = -103;
            $res['msg'] = Common::getErrorMsg($errCode);
            return $res;
        }

        // 4.生成3rd_session
        $data = json_decode($data, true);
        $session3rd = Common::isWin() === true ? Common::getNonce() : Common::getNonceByURandom();

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
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $postParamArr);
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::WXAQRCODE_PATH . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($finalParamArr));
        return $res;
    }

    /**
     * 获取有数量限制的小程序码
     * @param array $postParamArr
     * @return mixed
     */
    public function getWXACode($postParamArr = array())
    {
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $postParamArr);
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::WXACODE_PATH . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($finalParamArr));
        return $res;
    }

    /**
     * 获取无数量限制的小程序码
     * @param array $postParamArr
     * @return mixed
     */
    public function getWXACodeUnlimit($postParamArr = array())
    {
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $postParamArr);
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::WXACODE_UNLIMIT_PATH . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($finalParamArr));
        return $res;
    }

    /**
     * 组合模板并添加至帐号下的个人模板库
     * @param array $postParamArr
     * @return mixed
     */
    public function addTemplate($postParamArr = array())
    {
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $postParamArr);
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::ADD_TEMPLATE_PATH . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($finalParamArr));
        return $res;
    }

    /**
     * 删除帐号下的某个模板
     * @param array $postParamArr
     * @return mixed
     */
    public function deleteTemplate($postParamArr = array())
    {
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $postParamArr);
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::DELETE_TEMPLATE_PATH . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($finalParamArr));
        return $res;
    }

    /**
     * 获取模板库某个模板标题下关键词库
     * @param array $postParamArr
     * @return mixed
     */
    public function getTemplateLibraryById($postParamArr = array())
    {
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $postParamArr);
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::GET_TEMPLATE_LIBRARY_BY_ID_PATH . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($finalParamArr));
        return $res;
    }

    /**
     * 获取小程序模板库标题列表
     * @param array $postParamArr
     * @return mixed
     */
    public function getTemplateLibraryList($postParamArr = array())
    {
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $postParamArr);
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::GET_TEMPLATE_LIBRARY_LIST_PATH . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($finalParamArr));
        return $res;
    }

    /**
     * 获取帐号下已存在的模板列表
     * @param array $postParamArr
     * @return mixed
     */
    public function getTemplateList($postParamArr = array())
    {
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $postParamArr);
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::GET_TEMPLATE_LIST_PATH . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($finalParamArr));
        return $res;
    }

    /**
     * 发送模板消息
     * @param array $postParamArr
     * @return mixed
     */
    public function sendTemplateMessage($postParamArr = array())
    {
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $postParamArr);
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::SEND_TEMPLATE_MESSAGE . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($finalParamArr));
        return $res;
    }

    /**
     * 下发小程序和公众号统一的服务消息
     * @param array $postParamArr
     * @return mixed
     */
    public function sendUniformMessage($postParamArr = array())
    {
        $finalParamArr = Common::extendArrayData($this->defaultParamInfo[__FUNCTION__], $postParamArr);
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::SEND_UNIFORM_MESSAGE . http_build_query($urlParamArr);
        $res = Common::httpRequest($url, json_encode($finalParamArr));
        return $res;
    }

    /**
     * 创建被分享动态消息的 activity_id
     * @param array $postParamArr
     * @return mixed
     */
    public function createActivityId()
    {
        $urlParamArr = array(
            'access_token'=>$this->accessToken
        );
        $url = self::API_HOST . self::SEND_UNIFORM_MESSAGE . http_build_query($urlParamArr);
        $res = Common::httpRequest($url);
        return $res;
    }
}