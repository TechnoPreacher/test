<?php

namespace Cars;

//для демонстрации КОМПОЗИЦИИ
//класс учётной карты в полиции для конкретной машины.
// будет уничтожаться автоматически, если уничтожена машина


class Police
{
    protected string $dateTime;
    protected float $engineVolume;
    protected string $model;


    public function __construct(string $date, float $engine, string $brand)
    {
        $this->setDateTime($date);
        $this->engineVolume=$engine;
        $this->setModel($brand);
echo "car ".$brand. " with engine volume ". $engine."L is registered in police at " . $date.PHP_EOL;
    }



    public function setDateTime(string $dateTime): void
    {
        $this->dateTime = $dateTime;
    }



    public function getDateTime(): string
    {
        return $this->dateTime;
    }


    public function getEngineVolume(): int
    {
        return $this->engineVolume;
    }


    public function getModel(): string
    {
        return $this->model;
    }


    public function setEngineVolume(int $engineVolume): void
    {
        $this->engineVolume = $engineVolume;
    }


    public function setModel(string $model): void
    {
        $this->model = $model;
    }



}