<?php

namespace Core;

class Container
{
    protected $bindings = [];

    public function bind($key, $resolver) // add
    {
        $this->bindings[$key] = $resolver;
    }

    public function resolve($key) // remove
    {
        if (! array_key_exists($key, $this->bindings)) {
            throw new \Exception("No Match binding Found for {$key}!");
        }
        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }
}