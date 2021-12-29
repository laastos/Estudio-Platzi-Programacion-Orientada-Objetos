<?php

require 'Account.php';

class Car
{
    public int $id;
    public string $license;
    public Account $driver;
    protected int $passenger;

    public function __construct(string $license, Account $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
        $this->passenger = 0;
    }

    public function setPassenger(int $passenger)
    {
        if ($passenger == 4) {
            $this->passenger = $passenger;
        } else {
            echo "Debe ser un vehículo de 4 pasajeros\n";
        }
    }

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function printDataCar()
    {
        echo "License: {$this->license} \nName Driver: {$this->driver->name} \nDocument Driver: {$this->driver->document} \nPassengers: {$this->passenger}\n";
    }
}
