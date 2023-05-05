<?php

use Core\Authenticator;
use Http\Forms\LoginForm;


$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$sinedIn = (new Authenticator())->attempt($attributes['email'], $attributes['password']);

if (! $sinedIn) {
    $form->error('e-p', 'Email or Password Is Invalid!')->throw();
}

redirect('/');
