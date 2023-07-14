<?php

namespace Core;

class Router
{
    protected $routes = [];

    protected function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }
        $this->abort();
    }

    protected function abort($code = Response::NOT_FOUND) {
        http_response_code($code);
        view("{$code}.php");
        die();
    }
}

//
///* (array_key_exists) => Returns bool that the key you want is exist in the array or not */
//
//function routeToControl($uri, $routes) {
//    if (array_key_exists($uri, $routes)) {
//        require base_path($routes[$uri]);
//    } else {
//            abort();
//    }
//}
//
//$routes = require base_path('routes.php');
//$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//// parse_url($uri); // returns an array info about the url, You can take the extract the path you want from it
//
//routeToControl($uri, $routes);