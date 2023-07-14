<?php


use Core\App;
use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$currentUserId = 1;

$db = App::resolve(Database::class);
$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_POST['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$errors = [];

if (!Validator::string($_POST['title'], 1, 20)) {
    $errors['title'] = 'A Title less than 20 chars is Required!';
}

if (!Validator::string($_POST['body'], 1, 255)) {
    $errors['body'] = 'A Description less than 255 chars is Required!';
}

if (count($errors)) {
     view('notes/edit.view.php', [
       'heading' => 'Edit Note',
       'errors' => $errors,
       'note' => $note
    ]);

}

$db->query('UPDATE notes SET title = :title, body = :body WHERE id = :id AND user_id = :user_id',
    [
        "id" => $note['id'],
        "title" => $_POST['title'],
        "body" => $_POST['body'],
        "user_id" => $currentUserId
    ]);

header("location: /demo/notes");
exit();