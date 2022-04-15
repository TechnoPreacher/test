<?php

namespace Cars;

use Interfaces\MovableInterface;

class Car implements MovableInterface
{

    protected int $maxSpeed;//максимальная скорость
    protected int $speed;//текущая скорость

    public function __construct(int $maximum)
    {
        $this->maxSpeed = $maximum;
        echo "CAR: new car is born with max speed $maximum " . "current speed is zero" . PHP_EOL;
        $this->speed = 0;
    }

    public function getSpeed(): int
    {
        echo "CAR: current speed: ";
        return $this->speed;
    }

    public function start()
    {
        echo "CAR: engine start..." . PHP_EOL;
    }

    public function stop()
    {
        echo "CAR: stop engine. speed is zero" . PHP_EOL;
        $this->speed = 0;//обнуление текущей скорости
    }

    public function up(int $unit)
    {
        if ($unit < 0) {
            echo "CAR: speed is incorrect!" . PHP_EOL;
            return;
        }
        if ($unit > $this->maxSpeed) {
            echo "CAR: speed limit. new speed reduced to max.speed: $this->maxSpeed" . PHP_EOL;
            $this->speed = $this->maxSpeed;
        } else {
            echo "CAR: speedup! new speed: $unit" . PHP_EOL;
            $this->speed = $unit;
        }
    }

    public function down(int $unit)
    {
        if ($unit <= 0) {
            echo "CAR: try to set speed around zero... stopping." . PHP_EOL;
            $this->stop();
        } else {
            echo "CAR: speed down! new speed: $unit" . PHP_EOL;
            $this->speed = $unit;
        }
    }
}