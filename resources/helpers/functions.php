<?php

if ( ! function_exists('element'))
{
    function element($item, array $array, $default = NULL)
    {
        return array_key_exists($item, $array) ? $array[$item] : $default;
    }
}
