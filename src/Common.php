<?php

namespace Hillpy\MiniProgramSDK;

class Common
{
    public static function handleParam($rawData, $newData)
    {
        if (!is_array($rawData) || count($rawData) <= 0) {
            return [];
        }
        $paramArr = [];
        foreach ($rawData as $key => $value) {
            // 有传该字段
            if (isset($newData[$key])) {
                // 该字段必须为数组，则再次调用自身方法
                if (
                    isset($value['value']) &&
                    is_array($value['value'])
                ) {
                    $paramArr[$key] = self::handleParam($value['value'], $newData[$key]);

                // 传入值不在枚举值中，则直接从默认值复制
                } elseif (
                    isset($value['enum']) &&
                    is_array($value['enum']) &&
                    count($value['enum']) > 0 &&
                    !in_array($newData[$key], $value['enum'])
                ) {
                    if (
                        isset($value['required']) &&
                        $value['required']
                    ) {
                        $paramArr[$key] = isset($value['default']) ? $value['default'] : '';
                    }
                } else {
                    $paramArr[$key] = $newData[$key];
                }

                // 未传该字段情况下判断是否必填，若是，则获取默认值
            } elseif (
                isset($value['required']) &&
                $value['required']
            ) {
                $paramArr[$key] = isset($value['default']) ? $value['default'] : '';
            }
        }
        return $paramArr;
    }
}
