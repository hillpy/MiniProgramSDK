<?php

namespace Hillpy\MiniProgramSDK\Params;

class NearbyPoiParam
{
    public static $nearbyPoi = [
        'add' => [
            'access_token' => '',
            'is_comm_nearby' => '',
            'pic_list' => '',
            'service_infos' => '',
            'kf_info' => '',
            'hour' => '',
            'address' => '',
            'poi_id' => '',
            'company_name' => '',
            'contract_phone' => '',
            'credential' => '',
            'qualification_list' => '',
            'mapPoiId' => '',
        ],
        'delete' => [
            'access_token' => '',
            'poi_id' => '',
        ],
        'getList' => [
            'access_token' => '',
            'page' => '',
            'page_rows' => '',
        ],
        'setShowStatus' => [
            'access_token' => '',
            'po_id' => '',
            'status' => '',
        ],
    ];
}
