<?php

use Core\Database;
use Core\Validator;

$config = require('config.php');
$db = new Database($config);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (! Validator::email($email)) {
    $errors['email'] = 'Email is Not Valid!';
}
if (! Validator::string($username, 7, 22)) {
    $errors['username'] = 'Username Should Be between 7 and 22 Characters.';
}
if (! Validator::string($password, 7, 255)) {
    $errors['password'] = 'please provide a password of 7 to 255 characters!';
}

if (! empty($errors)) {
    view('signup.view.php', [
        'errors' => $errors
    ]);
    die();
}

$user = $db->query('SELECT * FROM user WHERE email = :email', [
    'email' => $email
])->fetch();

if ($user) {
    // This means The user is already exists.
    // redirect to the login page.
    $errors['email'] = 'Email Already Exists!';
    view('signup.view.php', [
        'errors' => $errors
    ]);
} else {
    // This means the user is new to the website.
    // insert its info into the database.
    $db->query('INSERT INTO user(name, email, password) VALUES(:name, :email, :password)', [
        'name' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    header('location: /login');
    exit();
}