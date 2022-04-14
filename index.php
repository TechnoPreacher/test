<?php

function loaderForScripts($class_name) {
    $PATHS= array(
        "/",
        "/Trucks/",
        "/Cars/",
        "/Interfaces/"
    );

    foreach ($PATHS as $v)
    {
        if (file_exists(__DIR__ . $v . $class_name . '.php')) {
            include __DIR__ . $v . $class_name . '.php';
        }
    }
}

spl_autoload_register("loaderForScripts");

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

$sTruck::$country = "usa";

$oTruck = new OptimusTruck(10000);

echo "------------------CHECK ROUTINE-----------" . PHP_EOL . PHP_EOL;
$check = new AllFunctions();
$check->check($sTruck);
$check->check($firstCar);
$check->check($oTruck);

echo $sTruck::$country . PHP_EOL;
echo $oTruck::$country . PHP_EOL;

$sTruck::setCountry("amerika");
echo $oTruck::$country . PHP_EOL;
echo $sTruck::$country . PHP_EOL;