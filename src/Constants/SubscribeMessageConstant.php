<?php

namespace Hillpy\MiniProgramSDK\Constants;

class SubscribeMessageConstant extends BaseConstant
{
    const ADD_TEMPLATE_PATH = '/wxaapi/newtmpl/addtemplate?';
    const DELETE_TEMPLATE_PATH = '/wxaapi/newtmpl/deltemplate?';
    const GET_CATEGORY_PATH = '/wxaapi/newtmpl/getcategory?';
    const GET_PUB_TEMPLATE_KEYWORDS_BY_ID_PATH = '/wxaapi/newtmpl/getpubtemplatekeywords?';
    const GET_PUB_TEMPLATE_TITLE_LIST_PATH = '/wxaapi/newtmpl/getpubtemplatetitles?';
    const GET_TEMPLATE_LIST_PATH = '/wxaapi/newtmpl/gettemplate?';
    const SEND_PATH = '/cgi-bin/message/subscribe/send?';
}
