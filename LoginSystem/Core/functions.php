<?php

function base_path($path)
{
    return BASE_PATH . $path;
}
function view($path, $attributes)
{
    extract($attributes);
    return require base_path("Views/$path");
}