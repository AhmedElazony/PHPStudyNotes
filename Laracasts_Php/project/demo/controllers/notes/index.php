<?php

use Core\App;
use Core\Database;

$heading = "My Notes";

$db = App::resolve(Database::class);

$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->get();

view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);