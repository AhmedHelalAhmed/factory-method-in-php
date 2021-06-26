<?php

namespace FactoryMethodInPhp\Response;

class JSONResponse implements ResponseInterface
{
    public function send(): string
    {
        return json_encode(['name' => 'Factory method']);
    }
}
