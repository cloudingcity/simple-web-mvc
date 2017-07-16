<?php

namespace Core;

class Router
{
    protected $routes = [];

    public static function load(string $file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri, $method)
    {
        echo 'uri:' . $uri."<br> method:" . $method;
    }
}
