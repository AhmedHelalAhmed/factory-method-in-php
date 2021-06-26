<?php

namespace FactoryMethodInPhp\Sender;

use FactoryMethodInPhp\Response\JSONResponse;

class APISender extends Sender
{
    public function createResponse(): JSONResponse
    {
        return new JSONResponse();
    }
}
