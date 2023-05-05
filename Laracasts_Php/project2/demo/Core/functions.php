<?php

use Core\Response;

function dump_and_die($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }
}

function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    return require base_path('Views/' . $path);
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);
    view("{$code}.php");
    die();
}

function redirect($path) {
    header("location: {$path}");
    exit();
}

function old($key, $default = '')
{
    return \Core\Session::get($key)['email'] ?? $default;
}