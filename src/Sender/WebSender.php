<?php

namespace FactoryMethodInPhp\Sender;

use FactoryMethodInPhp\Response\HTMLResponse;

class WebSender extends Sender
{
    public function createResponse(): HTMLResponse
    {
        return new HTMLResponse();
    }
}
