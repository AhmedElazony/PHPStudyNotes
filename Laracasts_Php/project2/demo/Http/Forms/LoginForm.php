<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
    protected array $errors = [];

    public function __construct(public array $attributes) // this is like a public property.
    {
        if (! Validator::email($attributes['email'])) {
            $this->errors['email'] = 'Please provide a valid email address!';
        }

        if (! Validator::string($attributes['password'])) {
            $this->errors['password'] = 'Please provide a valid password!';
        }
    }

    public static function validate($attributes)
    {
        $instance = new static($attributes); // instantiate a static constructor of the class.

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function failed(): int
    {
        return count($this->errors);
    }

    public function throw(): ValidationException
    {
       return ValidationException::throw($this->errors, $this->attributes);
    }

    public function errors(): array
    {
        return $this->errors;
    }

    public function error($key, $value)
    {
        $this->errors[$key] = $value;
        return $this;
    }

}