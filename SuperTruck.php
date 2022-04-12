<?php
include_once "MovableInterface.php";


abstract class SuperTruck implements MovableInterface
{
    protected int $maxSpeed;
    protected int $speed=0;

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