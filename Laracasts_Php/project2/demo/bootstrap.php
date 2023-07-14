<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

// Bind The Database Key To a function that is responsible for building the database object
$container->bind('Core\Database', function () {
    $config = require base_path('config.php');

    return new Database($config['database']);
});

App::setContainer($container);