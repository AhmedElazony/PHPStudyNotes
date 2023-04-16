<?php

$heading = "Notes";
$currentUserId = 1;

$config = require('config.php');
$db = new Database($config['database'], 'root', 'helloworld');

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

require 'Views/note.view.php';