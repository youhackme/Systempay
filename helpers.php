<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 18/10/2017
 * Time: 09:51
 */


/**
 * Filter the array using the given Closure.
 *
 * @param         $array
 * @param Closure $callback
 *
 * @return array
 */
function array_where($array, $callback)
{
    $filtered = [];
    foreach ($array as $key => $value) {
        if (call_user_func($callback, $key, $value)) {
            $filtered[$key] = $value;
        }
    }

    return $filtered;
}


/**
 * Gets the value of an environment variable. Supports boolean, empty and null.
 *
 * @param  string $key
 * @param  mixed  $default
 *
 * @return mixed
 */
function env($key, $default = null)
{
    $value = getenv($key);
    if ($value === false) {
        return value($default);
    }
    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;
        case 'false':
        case '(false)':
            return false;
        case 'empty':
        case '(empty)':
            return '';
        case 'null':
        case '(null)':
            return;
    }
    if (Str::startsWith($value, '"') && Str::endsWith($value, '"')) {
        return substr($value, 1, -1);
    }

    return $value;
}


