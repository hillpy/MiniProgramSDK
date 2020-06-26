<?php

namespace Hillpy\MiniProgramSDK\Constants;

class ImmediateDeliveryConstant extends BaseConstant
{
    const RE_ORDER_PATH = '/cgi-bin/express/local/business/order/readd?';
    const ABNORMAL_CONFIRM_PATH = '/cgi-bin/express/local/business/order/confirm_return?';
    const ADD_ORDER_PATH = '/cgi-bin/express/local/business/order/add?';
    const ADD_TIP_PATH = '/cgi-bin/express/local/business/order/addtips?';
    const BIND_ACCOUNT_PATH = '/cgi-bin/express/local/business/shop/add?';
    const CANCEL_ORDER_PATH = '/cgi-bin/express/local/business/order/cancel?';
    const GET_ALL_IMME_DELIVERY_PATH = '/cgi-bin/express/local/business/delivery/getall?';
    const GET_BIND_ACCOUNT_PATH = '/cgi-bin/express/local/business/shop/get?';
    const GET_ORDER_PATH = '/cgi-bin/express/local/business/order/get?';
    const MOCK_UPDATE_ORDER_PATH = '/cgi-bin/express/local/business/test_update_order?';
    const OPEN_DELIVERY_PATH = '/cgi-bin/express/local/business/open?';
    const PRE_ADD_ORDER_PATH = '/cgi-bin/express/local/business/order/pre_add?';
    const PRE_CANCEL_ORDER_PATH = '/cgi-bin/express/local/business/order/precancel?';
    const REAL_MOCK_UPDATE_ORDER_PATH = '/cgi-bin/express/local/business/realmock_update_order?';
    const UPDATE_ORDER_PATH = '/cgi-bin/express/local/delivery/update_order?';
}
