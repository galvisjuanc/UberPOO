<?php
    require_once('Car.php');
    require_once('Account.php');

    $car = new Car("AW1234", new Account("Andres Herrera", "AMS123"));
    $car->PrintDataCar();
?>