<?php

namespace Core;

class Validator
{
    public static function string($string, $min = 1, $max = INF): bool
    {
        $string = trim($string);

        return strlen($string) >= $min && strlen($string) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}