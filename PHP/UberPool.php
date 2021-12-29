<?php
require_once 'Car.php';

class UberPool extends Car
{
    public string $brand;
    public string $model;

    public function __construct(string $license, Account $driver, string $brand, string $model)
    {
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }
}
