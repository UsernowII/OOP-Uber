<?php
require_once('car.php');
require_once('uberX.php');
require_once('account.php');
require_once('uberVan.php');


$uberX = new UberX("CDX121", new Account("Andres Herrera", "AND456"), " Chevrolet", "Spark");
$uberX ->setPassenger(4)
$uberX ->prinDataCar();

$uberPool = new Uberpool("MYH123", new Account("Andrea Herrera", "ANM985"), " Dodge", "Attitude");
$uberPool->printDataCar();

$uberVan = new UberVan("OJL395", new Account("Raul Ramirez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();

?>