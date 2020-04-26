<?php

namespace Hillpy\MiniProgramSDK\Helpers\Common;

trait Common
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
            return array();
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
}