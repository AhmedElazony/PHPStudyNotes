<?php

$heading = "Notes";
$currentUserId = 1;

$config = require('config.php');
$db = new Database($config['database'], 'root', 'ahmedwael2440');

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

require 'Views/note.view.php';