<?php

namespace Hillpy\MiniProgramSDK\Traits;

use Hillpy\MiniProgramSDK\Errors\DecryptionError;
use Hillpy\MiniProgramSDK\Libraries\Common\Common;
use Hillpy\MiniProgramSDK\Params\DecryptionParam;

trait DecryptionTrait
{
    public function decryptUserInfo($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(DecryptionParam::$decryption[__FUNCTION__], $paramArr);

        $newSignature = sha1($finalParamArr['raw_data'] . $finalParamArr['session_key']);
        if ($newSignature !== $finalParamArr['signature'] && 0) {
            return [
                'code' => DecryptionError::ERROR_SESSION_KEY,
                'data' => []
            ];
        }

        return $this->decryptData(
            $finalParamArr['encrypted_data'],
            $finalParamArr['session_key'],
            $finalParamArr['iv'],
            isset($this->options['app_id']) && $this->options['app_id'] ? $this->options['app_id'] : $finalParamArr['app_id']
        );
    }

    public function decryptPhone($paramArr = [])
    {
        $finalParamArr = Common::updateArrayData(DecryptionParam::$decryption[__FUNCTION__], $paramArr);

        return $this->decryptData(
            $finalParamArr['encrypted_data'],
            $finalParamArr['session_key'],
            $finalParamArr['iv'],
            isset($this->options['app_id']) && $this->options['app_id'] ? $this->options['app_id'] : $finalParamArr['app_id']
        );
    }

    public function decryptData($encryptedData = '', $sessionKey = '', $iv = '', $appId = '')
    {
        $resData = [
            'code' => DecryptionError::OK,
            'data' => []
        ];

        if (strlen($sessionKey) != 24) {
            $resData['code'] = DecryptionError::ERROR_SESSION_KEY;
            return $resData;
        }
        if (strlen($iv) != 24) {
            $resData['code'] = DecryptionError::ERROR_IV;
            return $resData;
        }

        $aesCipher = base64_decode($encryptedData);
        $aesKey = base64_decode($sessionKey);
        $aesIV = base64_decode($iv);
        $resData['data'] = json_decode(openssl_decrypt($aesCipher, 'AES-128-CBC', $aesKey, 1, $aesIV), true);

        if (!$resData['data']) {
            $resData['code'] = DecryptionError::ERROR_BUFFER;
            return $resData;
        }
        if (
            !isset($resData['data']['watermark']['appid']) ||
            $resData['data']['watermark']['appid'] != $appId
        ) {
            $resData['code'] = DecryptionError::ERROR_BUFFER;
            return $resData;
        }

        return $resData;
    }
}
