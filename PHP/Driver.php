<?php
require_once 'Account.php';

class Driver extends Account
{
    public $license;

    public function __construct(string $license, string $name, string $document, string $email, string $password)
    {
        parent::__construct($name, $document);
        $this->license = $license;
        $this->email = $email;
        $this->password = $password;
    }
}
