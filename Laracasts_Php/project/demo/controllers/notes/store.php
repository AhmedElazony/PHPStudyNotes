<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

require base_path('Core/Validator.php');

$errors = [];

if (!Validator::string($_POST['title'], 1, 20)) {
    $errors['title'] = 'A Title less than 20 chars is Required!';
}

if (!Validator::string($_POST['body'], 1, 255)) {
    $errors['body'] = 'A Description less than 255 chars is Required!';
}

if (! empty($errors)) {
    view('notes/create.view.php', [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO notes(title, body, user_id) VALUES (:title, :body, :user_id)',
[
"title" => $_POST['title'],
"body" => $_POST['body'],
"user_id" => 1
]);

header("location: /demo/notes");
exit();
