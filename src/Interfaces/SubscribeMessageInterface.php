<?php

namespace Hillpy\MiniProgramSDK\Interfaces;

interface SubscribeMessageInterface
{
    public function addTemplate();
    public function deleteTemplate();
    public function getCategory();
    public function getPubTemplateKeywordsById();
    public function getPubTemplateTitleList();
    public function getTemplateList();
    public function send();
}
