<?php

class appsShopPage_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.page_delete', $params, $array_keys);
        return ifempty($event);
    }
}