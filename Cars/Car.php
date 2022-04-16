<?php

namespace Cars;

use Interfaces\MovableInterface;

class Car implements MovableInterface
{

    protected int $maxSpeed;//максимальная скорость
    protected int $speed;//текущая скорость
    protected string $brand;//марка машины
    protected $engine;//двигатель для агрегации
    protected  $police;//протокол о штрафах для композиции!

    public function __destruct()
    {
        echo $this->brand . " is die!" . PHP_EOL;
        $this->engine->setSet(false);
    }

    public function __construct(string $brand, int $maximum, Engine $motor)
    {
        $this->maxSpeed = $maximum;
        $this->brand = $brand;
        echo "CAR: new $brand car is born with max speed $maximum; " . "current speed is zero" . PHP_EOL;
        $this->speed = 0;
        $this->engine =$motor;
        $this->engine->setSet(true);//"установка двигателся в машину"
        $this->police = new Police(date("l jS \of F Y h:i:s A"),$motor->getVolume(),$brand);
    }


    public function getPolice(): Police
    {
        return $this->police;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getEngine(): Engine
    {
        return $this->engine;
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