<?php
require_once('Car.php');
require_once('Account.php');
require_once('uberX.php');
require_once('uberPool.php');

$car = new Car("AW1234", new Account("Andres Herrera ", "AMS123 "));
$car->PrintDataCar();

$uberX = new UberX("CVB123", new Account("Juan Galvis ", "JCG1230 "), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("MJG890", new Account("Luis Narvaez ", "LANJ456"), "Mazda", "Btich");
$uberPool->printDataCar();
?>