<?php

include_once "SuperTruck.php";

class simpleTruck extends SuperTruck
{

    public function start()
    {
        echo "SIMPLE: overrided start function for simple Truck!" . PHP_EOL;
    }


}