<?php

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {

       $value = trim($value);

       return strlen($value) >= $min && strlen($value) <= $max;
    }


//pure function: a function that is not contingent or dependent upon state or values from the outside world (the world outside this function) not referening outside classes or object

 public static function email($value)
{
    return filter_var($value, FILTER_VALIDATE_EMAIL);
}
}