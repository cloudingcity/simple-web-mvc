<?php

namespace Core;

class Router
{
    /**
     * The array of routes.
     *
     * @var array
     */
    protected $routes = [];

    /**
     * Load app/routes.php and set $this->routes.
     *
     * @param string $file
     * @return static
     */
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    /**
     * Set GET routes.
     *
     * @param string $uri
     * @param string $controller
     */
    public function get($uri, $controller)
    {
        if (!isset($this->routes['GET'][$uri])) {
            $this->routes['GET'][$uri] = $controller;
        }
    }

    /**
     * Set POST routes.
     *
     * @param string $uri
     * @param string $controller
     */
    public function post($uri, $controller)
    {
        if (!isset($this->routes['POST'][$uri])) {
            $this->routes['POST'][$uri] = $controller;
        }
    }

    /**
     * Direct to controller.
     *
     * @param string $uri
     * @param string $requestMethod
     *
     * @throws \Exception
     */
    public function direct($uri, $requestMethod)
    {
        if (isset($this->routes[$requestMethod]) && array_key_exists($uri, $this->routes[$requestMethod])) {
            $this->callMethod(...explode('@', $this->routes[$requestMethod][$uri]));
        } else {
//            throw new \Exception('No route defined for this URI');
            http_response_code(404);
            view('404');
        }
    }

    /**
     * Call controller's method.
     *
     * @param $controller
     * @param $method
     * @return mixed
     *
     * @throws \Exception
     */
    protected function callMethod($controller, $method)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller();

        if (! method_exists($controller, $method)) {
            throw new \Exception(
                "{$controller} does not respond to the {$method} method."
            );
        }
        return $controller->$method();
    }
}
