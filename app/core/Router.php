<?php

namespace App\Core;

class Router
{
    private $routes = [];

    public function add($method, $uri, $action)
    {
        $this->routes[] = compact('method', 'uri', 'action');
    }

    public function dispatch($method, $uri)
    {
        $uri = rtrim($uri, '/'); // Normalize URI by removing trailing slash
        foreach ($this->routes as $route) {
            if ($method === $route['method'] && $uri === rtrim($route['uri'], '/')) {
                return call_user_func($route['action']);
            }
        }

        http_response_code(404);
        echo "Page not found.";
    }
}