<?php

namespace Core;

class App
{
    /**
     * Store register.
     *
     * @var array
     */
    protected static $registry = [];

    /**
     * Bind to registry.
     *
     * @param $key
     * @param $value
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * Get from registry.
     *
     * @param $key
     * @return mixed
     *
     * @throws \Exception
     */
    public static function get($key)
    {
        if (array_key_exists($key, static::$registry)) {
            return static::$registry[$key];
        } else {
            throw new \Exception("No {$key} is bound in the container.");
        }
    }
}
