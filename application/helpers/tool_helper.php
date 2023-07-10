<?php

function get_error($error, $name) {
    if(array_key_exists($name, $error))
        return $error[$name];
    return '';
}
