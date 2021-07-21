<?php

namespace App\Core;

/**
 * Class Request
 * 
 * @author Quan Vu <info@quanvu.net>
 * @package App\Core
 */
class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');

        if ($position === false) {
            return $path;
        }

        $path = substr($path, 0, $position);
        
        return $path;
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}