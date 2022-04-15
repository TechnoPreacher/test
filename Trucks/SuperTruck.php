<?php

namespace Trucks;

use Interfaces;

abstract class SuperTruck implements Interfaces\MovableInterface
{
    protected int $maxSpeed;
    protected int $speed=0;
    public static string $country;
    protected static string $ID;
    const childCarsFamily="trucks";//константа, показывающая вид создаваемых объектов

    public static function setAuthorID($id): void//установка идентификатора для всех дочерних классов
    {
        self::$ID=$id;
    }

   public static function setCountry(string $country): void//страна
    {
        self::$country = $country;
    }

    public function __construct(int $maxSpeed)
    {
        echo "SUPER: father SuperTruck constructor always set max speed for it's children" . PHP_EOL;
        $this->maxSpeed = $maxSpeed;

    }

    public function down(int $unit)
    {
        $this->speed = $unit;
    }

    public function up(int $unit)
    {
        $this->speed = $unit;
    }

    public function start()
    {
        $this->speed = 0;
    }

    public function stop()
    {
        $this->speed = 0;
    }


    public function getSpeed(): int
    { echo "SUPER: truck speed is: ";
        return $this->speed;
    }
}