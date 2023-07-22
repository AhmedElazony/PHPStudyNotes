<?php

use Core\Database;
use Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$config = require('config.php');
$db = new Database($config);

new LoginForm(['email' => $email, 'password' => $password]);

$user = $db->query("SELECT * FROM user WHERE email = :email", [
    'email' => $email
])->fetch();

if ($user) {
    // this means email has been found.
    // check the password.
    if (password_verify($password, $user['password'])) {
        $_SESSION['user']['username'] = $user['name'];
        session_regenerate_id(true);
    } else {
        $errors['password'] = 'Password is Incorrect!';
    }
} else {
    $errors['email'] = 'Email Not Found!';
}

if (! empty($errors)) {
    echo 'Error!';
    view('login.view.php', [
        'errors' => $errors
    ]);
    exit();
}

header('location: /');
exit();

