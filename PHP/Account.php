<?php

class Account
{
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;

    public function __construct(string $name, string $document)
    {
        $this->name = $name;
        $this->document = $document;
    }
}
