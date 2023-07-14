<?php

//return [
//    '/demo' => 'controllers/index.php',
//    '/demo/about' => 'controllers/about.php',
//    '/demo/notes' => 'controllers/notes/index.php',
//    '/demo/note' => 'controllers/notes/show.php',
//    '/demo/notes/edit' => 'controllers/notes/edit.php',
//    '/demo/notes/create' => 'controllers/notes/create.php',
//    '/demo/contact' => 'controllers/contact.php'
//];

$router->get('/demo', 'controllers/index.php');
$router->get('/demo/about', 'controllers/about.php');
$router->get('/demo/contact', 'controllers/contact.php');

$router->get('/demo/notes', 'controllers/notes/index.php');

$router->get('/demo/note', 'controllers/notes/show.php');
$router->delete('/demo/note', 'controllers/notes/destroy.php');

$router->get('/demo/notes/edit', 'controllers/notes/edit.php');
$router->patch('/demo/notes/edit', 'controllers/notes/update.php');

$router->get('/demo/notes/create', 'controllers/notes/create.php');
$router->post('/demo/notes/create', 'controllers/notes/store.php');


