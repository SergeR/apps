<?php

class appsPhotosPage_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('photos.page_save', $params, $array_keys);
        return ifempty($event);
    }
}
