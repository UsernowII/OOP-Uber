<?php
require_once('car.php');
require_once('uberX.php');
require_once('account.php');


$uberX = new UberX("CDX121", new Account("Andres Herrera", "AND456"), " Chevrolet", "Spark");
$uberX ->prinDataCar();

$uberPool = new Uberpool("MYH123", new Account("Andrea Herrera", "ANM985"), " Dodge", "Attitude");
$uberPool->printDataCar();
?>