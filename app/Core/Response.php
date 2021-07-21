<?php

namespace App\Core;

/**
 * Class Response
 * 
 * @author Quan Vu <info@quanvu.net>
 * @package App\Core
 */
class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}