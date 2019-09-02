<?php


function in_array_array(array $needles, array $haystack, bool $strict = false) : bool
{
    foreach ($needles as $needle) {
        if (in_array($needle, $haystack, $strict) === true) {
            return true;
        }
    }
    return false;
}
