<?php

class appsMailerSendertransportHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('mailer.sender.transport', $params, $array_keys);
        return ifempty($event);
    }
}
