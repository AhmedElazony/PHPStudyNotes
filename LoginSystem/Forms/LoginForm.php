<?php

namespace Forms;

use Core\Validator;

class LoginForm
{
    public $errors = [];
    public function __construct(array $attributes)
    {
        if (! Validator::email($attributes['email'])) {
            $this->errors['email'] = 'Email Is Incorrect of Invalid!';
        }

        if (! Validator::string($attributes['password'])) {
            $this->errors['password'] = 'Password is Incorrect Or Invalid!';
        }
    }
}