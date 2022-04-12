<?php



class AllFunctions
{

    public function check(MovableInterface $carForCheck)
{
    $carForCheck->start();
    $carForCheck->up(400);
    $carForCheck->down(100);
    $carForCheck->stop();
}


}