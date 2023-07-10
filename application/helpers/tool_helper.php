<?php

function get_error($error, $name) {
    if(array_key_exists($name, $error))
        return $error[$name];
    return '';
}

function to_timestamp($string) {
    $timestamp = strtotime($string);
    return date('Y-m-d H:i:s', $timestamp);
}