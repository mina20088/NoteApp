<?php

use database\Database;

class Validator
{
    public static function required(string $value): bool
    {
        $value = trim($value);
        return $value === "";
    }

    public static function max(string $string, int $value): bool
    {
        $value = trim($string);
        return strlen ($string) > $value;
    }

    public static function min(string $string,int $value): bool
    {
        $value = trim($string);
        return strlen ($string) < $value;
    }

    public static function email(string $email){
        $email = trim($email);
        return filter_var ($email,FILTER_VALIDATE_EMAIL);

    }

    public static function exists(string $needle, array $haystack, string $column): bool
    {
        $array_of_values = array_column ($haystack,$column);
        return in_array ($needle,$array_of_values);
    }

    public static function equals ($value_1,$value_2): bool
    {
        return $value_1 === $value_2;
    }
}