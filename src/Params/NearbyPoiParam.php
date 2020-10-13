<?php

namespace Hillpy\MiniProgramSDK\Params;

class NearbyPoiParam
{
    public static $nearbyPoi = [
        'add' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'is_comm_nearby' => [
                'default' => 1,
                'required' => true,
                'value' => '',
                'enum' => [
                    1,
                ],
            ],
            'pic_list' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'list' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'service_infos' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'service_infos' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'kf_info' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'store_name' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'hour' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'address' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'poi_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'company_name' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'contract_phone' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'credential' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'qualification_list' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'map_poi_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'delete' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'poi_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getList' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'page' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'page_rows' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'setShowStatus' => [
            'access_token' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'po_id' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'status' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    0,  // 不展示
                    1,  // 展示
                ],
            ],
        ],
    ];
}
