<?php

use Core\Validator;
use Core\App;
use Core\Database;

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate the form inputs.
$errors = [];
if (! Validator::string($username, 5, 33)){
    $errors['username'] = 'Please provide a username of 5 to 33 characters!';
}

if (! Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address!';
}

if (! Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least 7 characters!';
}

if (! empty($errors)) {
     view('Middleware/create.view.php', [
        'errors' => $errors
    ]);
}

// Check if the email already exits.
$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {
    // That means the email is already exit.
    // Redirect to the login page.
    header('location: /');
    exit();
} else {
    // That means this is a new user.
    // store its data into the database.
    $db->query('INSERT INTO users(username, email, password) VALUES(:username, :email, :password)', [
        'username' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    // mark that the user has logged in.
    login([
        'username' => $username,
        'email' => $email
    ]);

    header('location: /');
    exit();
}