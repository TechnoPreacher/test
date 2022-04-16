<?php

namespace Cars;


class Driver
{
    protected string $name;


    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function drive(Car $car, int $speed)
    {
        $car->start();
        $car->up($speed);

    }



}