<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Param;

trait DecryptionTrait
{
    public function decryptUserInfo($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$decryption[__FUNCTION__], $paramArr);

        $newSignature = sha1($finalParamArr['rawData'] . $finalParamArr['session_key']);
        if ($newSignature !== $finalParamArr['signature']) {

        }

        $data = $this->decryptData(
            $finalParamArr['encryptedData'],
            $finalParamArr['sessionKey'],
            $finalParamArr['iv'],
            isset($this->options['app_id']) ? $this->options['app_id'] : $finalParamArr['appid']
        );
    }

    public function decryptPhone($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$decryption[__FUNCTION__], $paramArr);

        $data = $this->decryptData(
            $finalParamArr['encryptedData'],
            $finalParamArr['sessionKey'],
            $finalParamArr['iv'],
            isset($this->options['app_id']) ? $this->options['app_id'] : $finalParamArr['appid']
        );
    }

    public function decryptData($encryptedData = '', $sessionKey = '', $iv = '', $appid = '')
    {
        if (strlen($sessionKey) != 24) {
            return '';
        }
        $aesKey = base64_decode($sessionKey);

        if (strlen($iv) != 24) {
            return '';
        }
        $aesIV = base64_decode($encryptedData);
        $aesCipher = base64_decode($encryptedData);
        $data = openssl_decrypt($aesCipher, 'AES-128-CBC', $aesKey, 1, $aesIV);
        $dataObj = json_decode($data);
        if ($dataObj == null) {
            return '';
        }
        if ($dataObj->watermark->appid != $appid) {
            return '';
        }
        return $data;
    }
}
