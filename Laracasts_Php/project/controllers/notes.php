<?php

$heading = "My Notes";

$config = require('config.php');
$db = new Database($config['database'], 'root', 'helloworld');

$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->get();

require 'Views/notes.view.php';