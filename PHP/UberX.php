<?php
require_once 'Car.php';

class UberX extends Car
{
    public string $brand;
    public string $model;

    public function __construct(string $license, Account $driver, string $brand, string $model)
    {
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function printDataCar()
    {
        parent::printDataCar();
        echo "Brand: {$this->brand} \nModel: {$this->model}\n";
    }
}
