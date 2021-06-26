<?php

namespace FactoryMethodInPhp\Sender;

use FactoryMethodInPhp\Response\ResponseInterface;

abstract class Sender
{
    abstract public function createResponse(): ResponseInterface;

    public function sendResponse()
    {
        $response = $this->createResponse();
        return $response->send();
    }
}
