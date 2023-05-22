<?php

namespace app\App\src\classes;

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}