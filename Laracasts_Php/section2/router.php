<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// parse_url($uri); // returns an array info about the url, You can take the extract the path you want from it

$routes = [
'/demo' => 'controllers/index.php',
'/demo/about' => 'controllers/about.php',
'/demo/contact' => 'controllers/contact.php'
];

function abort($code = 404) {
http_response_code($code);
require "Views/{$code}.php";
die();
}

/* (array_key_exists) => Returns bool that the key you want is exist in the array or not */

function routeToControl($uri, $routes) {
if (array_key_exists($uri, $routes)) {
require $routes[$uri];
} else {
abort();
}
}

routeToControl($uri, $routes);