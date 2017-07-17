<?php

namespace Core;

class Request
{
    /**
     * Get request uri.
     *
     * @return string
     */
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }

    /**
     * Get request method.
     *
     * @return string
     */
    public static function method()
    {
        if (request('_method')) {
            return request('_method');
        }
        return $_SERVER['REQUEST_METHOD'];
    }
}
