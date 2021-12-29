<?php
require_once 'Car.php';

class UberVan extends Car
{
    public string $typeCarAccepted;
    public string $seatsMaterial;

    public function __construct(string $license, Account $driver, string $typeCarAccepted, string $seatsMaterial)
    {
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }

    public function setPassenger(int $passenger)
    {
        if ($passenger >= 6) {
            $this->passenger = $passenger;
        } else {
            echo "Debe ser un vehículo de al menos 6 pasajeros\n";
        }
    }
}
