<?php

session_start();

const BASE_PATH = __DIR__ . '/';
require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class){
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("$class.php");
});

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'Controllers/index.php',
    '/login' => 'Controllers/Session/create.php',
    '/login-user' => 'Controllers/Session/store.php',
    '/logout' => 'Controllers/Session/destroy.php',
    '/register' => 'Controllers/Registration/create.php',
    '/register-user' => 'Controllers/Registration/store.php',
    '/forgot-password' => 'Controllers/Password/update.php',
    '/update-password' => 'Controllers/Password/update-password.php'
];

function route($routes, $uri)
{
    if (array_key_exists($uri, $routes))
    {
        require($routes[$uri]);
    }
}
route($routes, $uri);