<?php
require_once 'Car.php';

class UberPool extends Car
{
    public string $typeCarAccepted;
    public string $seatsMaterial;

    public function __construct(string $license, Account $driver, string $typeCarAccepted, string $seatsMaterial)
    {
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }
}
