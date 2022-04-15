<?php

//использование пространств имён
use Trucks\simpleTruck;
use Trucks\OptimusTruck;
use Cars\Car;


function loaderForScripts($class_name)//функция для колбэк-вызова в автозагрузке
{
    include './'.str_ireplace("\\",'/',$class_name).".php";
}

spl_autoload_register("loaderForScripts");//запуск процедуры автозагрузки

$Car = new Car(130);

$sTruck = new SimpleTruck(92);//просто создаётся класс, который подгружается автоматически
echo $sTruck->getSpeed() . PHP_EOL;
$sTruck->start();
$sTruck::$country = "usa";
echo $sTruck::$country . PHP_EOL;

$oTruck = new OptimusTruck(10000);//и ещё один
echo $oTruck::$country . "  " . $sTruck::$country . PHP_EOL;

$sTruck::setCountry("amerika");
echo $oTruck::$country . "  " . $sTruck::$country . PHP_EOL;

$sTruck::$country="UA";
echo $oTruck::$country . "  " . $sTruck::$country . PHP_EOL;
