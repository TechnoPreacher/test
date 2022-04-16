<?php

namespace Cars;


//для демонстрации АГРЕГАЦИИ
//при создании задаётся объём двигателя
//при агрегации в машину меняется флаг установки
//остаётся объектом вне зависимости от того, установлен в машину или нет

class Engine
{

    protected float $volume;//объём двигателя
    protected bool $set = false;//установлен на машину

    public function __construct($vol)
    {
        $this->setVolume($vol);
    }

    public function setVolume(float $volume): void
    {
        $this->volume = $volume;
        echo "new volume for engine is $volume L" . PHP_EOL;//вывод информации о двигателе

    }

    public function getVolume(): float
    {
        return $this->volume;
    }


    public function isSet(): bool
    {
        return $this->set;
    }


    public function setSet(bool $set): void
    {
        if ($set) {
            echo "engine is mounted..." . PHP_EOL;
        } else {
            echo "engine unmounted" . PHP_EOL;
        }
        $this->set = $set;
    }

}