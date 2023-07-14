<?php

use Core\Validator;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

$config = require('config.php');
$db = new Database($config);

$errors = [];
if (! Validator::email($email)) {
    $errors['email'] = 'Email is Invalid!';
}

if (! Validator::string($password)) {
    $errors['password'] = 'Password Should Be between 7 and 255 Characters.';
}

$user = $db->query("SELECT * FROM user WHERE email = :email", [
    'email' => $email
])->fetch();

if ($user) {
    // this means email has been found.
    // update password.
    if (empty($errors)) {
        $db->query("UPDATE user SET password = :password WHERE email = :email", [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        ]);
        header('location: /login');
        exit();
    }
} else {
    // this means email is not in the database.
    $errors['email'] = 'Email is Not Found!';
}

view('update.view.php', [
    'errors' => $errors
]);
exit();

