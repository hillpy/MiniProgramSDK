<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Errors\DecryptionError;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Param;

trait DecryptionTrait
{
    public function decryptUserInfo($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$decryption[__FUNCTION__], $paramArr);

        $newSignature = sha1($finalParamArr['rawData'] . $finalParamArr['session_key']);
        if ($newSignature !== $finalParamArr['signature']) {
            return [
                'code' => $resData['code'] = DecryptionError::$ErrorSessionKey,
                'data' => []
            ];
        }

        return $this->decryptData(
            $finalParamArr['encryptedData'],
            $finalParamArr['sessionKey'],
            $finalParamArr['iv'],
            isset($this->options['app_id']) && $this->options['app_id'] ? $this->options['app_id'] : $finalParamArr['appid']
        );
    }

    public function decryptPhone($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(Param::$decryption[__FUNCTION__], $paramArr);

        return $this->decryptData(
            $finalParamArr['encryptedData'],
            $finalParamArr['sessionKey'],
            $finalParamArr['iv'],
            isset($this->options['app_id']) && $this->options['app_id'] ? $this->options['app_id'] : $finalParamArr['appid']
        );
    }

    public function decryptData($encryptedData = '', $sessionKey = '', $iv = '', $appid = '')
    {
        $resData = [
            'code' => DecryptionError::$OK,
            'data' => []
        ];

        if (strlen($sessionKey) != 24) {
            $resData['code'] = DecryptionError::$ErrorSessionKey;
            return $resData;
        }
        if (strlen($iv) != 24) {
            $resData['code'] = DecryptionError::$ErrorIv;
            return $resData;
        }

        $aesCipher = base64_decode($encryptedData);
        $aesKey = base64_decode($sessionKey);
        $aesIV = base64_decode($iv);
        $resData['data'] = json_decode(openssl_decrypt($aesCipher, 'AES-128-CBC', $aesKey, 1, $aesIV), true);

        if (!$resData['data']) {
            $resData['code'] = DecryptionError::$ErrorBuffer;
            return $resData;
        }
        if ($resData['watermark']['appid'] != $appid) {
            $resData['code'] = DecryptionError::$ErrorBuffer;
            return $resData;
        }

        return $resData;
    }
}
