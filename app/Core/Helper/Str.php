<?php

namespace App\Core\Helper;

class Str
{
    protected static string $str;
    
    public static function of(string $str)
    {
        self::$str = $str;
        return new Str();
    }

    public static function toCamelCase($symbol, $capitalizeFirstCharacter = false) 
    {
        $str = str_replace(' ', '', ucwords(str_replace($symbol, ' ', self::$str)));
        if (!$capitalizeFirstCharacter) {
            $str[0] = strtolower($str[0]);
        }
        return $str;
    }
}