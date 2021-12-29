<?php
require_once 'Car.php';
require_once 'UberX.php';
require_once 'UberBlack.php';
require_once 'UberVan.php';

$car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
$car->setPassenger(4);
$car->printDataCar();

echo "\n";

$car2 = new Car("QWE567", new Account("Andrea Herrera", "AND876"));
$car2->setPassenger(4);
$car2->printDataCar();

echo "\n";

$uberX = new UberX("CVB123", new Account("Xavier Herrera", "XVR123"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

echo "\n";

$uberBlack = new UberX("CVB123", new Account("Nanda Herrera", "NDA123"), "Ferrari", "Cuero");
$uberBlack->setPassenger(4);
$uberBlack->printDataCar();

echo "\n";

$uberVan = new UberVan("CVB123", new Account("Yoyin Herrera", "YOY753"), "GMC", "Cuero");
$uberVan->setPassenger(4);
$uberVan->printDataCar();
