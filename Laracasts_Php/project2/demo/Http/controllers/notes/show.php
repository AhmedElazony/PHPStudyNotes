<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = $db->query('SELECT id FROM users WHERE email = :email', [
    'email' => $_SESSION['user']['email']
])->find()['id'];

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view('notes/show.view.php', [
    'heading' => 'My Notes',
    'note' => $note
]);




