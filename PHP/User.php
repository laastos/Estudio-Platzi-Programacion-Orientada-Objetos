<?php
require_once 'Account.php';

class User extends Account
{
    public function __construct(string $name, string $document, string $email, string $password)
    {
        parent::__construct($name, $document);
        $this->email = $email;
        $this->password = $password;
    }
}
