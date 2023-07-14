<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = $db->query('SELECT id FROM users WHERE email = :email', [
    'email' => $_SESSION['user']['email']
])->find()['id'];

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_POST['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('DELETE FROM notes WHERE id = :id', ['id' => $_GET['id']]);

view('notes/delete.view.php', [
    'heading' => 'Delete Note'
]);


