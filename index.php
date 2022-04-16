<?php

//использование пространств имён
use Cars\Car;
use Cars\Engine;
use Cars\Driver;

function loaderForScripts($class_name)//функция для колбэк-вызова в автозагрузке
{
    include './' . str_ireplace("\\", '/', $class_name) . ".php";
}

spl_autoload_register("loaderForScripts");//запуск процедуры автозагрузки

$newEngine = new Engine(2);//создаю двухлитровый двигатель
$car1 = new Car("BMW", 330, $newEngine);

if ($newEngine->isSet()) {
    echo "engine is set to car " . $car1->getBrand() . " with volume " . $car1->getEngine()->getVolume() . "L" . PHP_EOL;
} else {
    echo "engine not installed" . PHP_EOL;
}

echo "Try to fid info about car in police: ";
try {
    echo $car1->getPolice()->getDateTime() . PHP_EOL;
} catch (Throwable) {
    echo "and the is no police registers for dead car" . PHP_EOL;
}

unset($car1);

try {
    echo $car1->getBrand();
} catch (Throwable) {
    echo "car is realy die!" . PHP_EOL;
}

echo "Try to fid info about car in police: ";
try {
    echo $car1->getPolice()->getDateTime() . PHP_EOL;
} catch (Throwable) {
    echo "and the is no police registers for dead car" . PHP_EOL;
}

echo "but the engine is alive! and volume is " . $newEngine->getVolume() . "L" . PHP_EOL;

$newEngine->setVolume(1.4);

$car2 = new Car("OPEL", 150, $newEngine);
echo "engine volume for " . $car2->getBrand() . " is " . $car2->getEngine()->getVolume() . PHP_EOL;


$driver1 = new Driver("Ivanov I.I.");
echo "DRIVER:" . $driver1->getName() . PHP_EOL;
$driver1->drive($car2,153);

unset($driver1);


$driver2 = new Driver("Petrov P.P.");
echo "DRIVER:" . $driver2->getName() . PHP_EOL;
$driver2->drive($car2,139);