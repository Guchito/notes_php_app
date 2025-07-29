<?php

class Validator
{
    public static function string($value, $min = 3, $max = 1000)
    {
        $value = trim($value);
        $length = strlen($value);

        if ($length < $min) {
            return "The value must be at least {$min} characters long.";
        }

        if ($length > $max) {
            return "The value must not exceed {$max} characters.";
        }

        return false;
    }

    public static function email($value)
    {
        $value = trim($value);
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return "The email address is not valid.";
        }
        return false;
    }
}