<?php

namespace FactoryMethodInPhp\Response;

class HTMLResponse implements ResponseInterface
{
    public function send(): string
    {
        return '<h1>Factory method</h1>';
    }
}
