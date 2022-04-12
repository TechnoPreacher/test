<?php

include "Car.php";
include "SimpleTruck.php";
include "OptimusTruck.php";
include "AllFunctions.php";


$firstCar = new Car(220);
echo $firstCar->getSpeed() . PHP_EOL;

$firstCar->start();
$firstCar->up(120);
echo $firstCar->getSpeed() . PHP_EOL;

$firstCar->up(330);
echo $firstCar->getSpeed() . PHP_EOL;

$firstCar->down(90);
echo $firstCar->getSpeed() . PHP_EOL;

$firstCar->up(-190);
echo $firstCar->getSpeed() . PHP_EOL;

$firstCar->stop();
echo $firstCar->getSpeed() . PHP_EOL;

$sTruck = new SimpleTruck(92);

echo $sTruck->getSpeed() . PHP_EOL;

$sTruck->start();

$oTruck = new OptimusTruck(10000);

echo "------------------CHECK ROUTINE-----------" . PHP_EOL . PHP_EOL;
$check = new AllFunctions();
$check->check($sTruck);
$check->check($firstCar);
$check->check($oTruck);


