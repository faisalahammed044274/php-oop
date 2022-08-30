<?php

abstract class Airplane
{

    //Abstract classes can have properties too. Interface cannot
    public $numberOfWings = 4;
    abstract public function canFly();

    public function canTakeOff()
    {
        echo "All airplanes can take  off\n";
    }

    public function canLand()
    {
        echo "All airplanes can land\n";
    }

}
class FighterPlane extends Airplane
{
    public function canFly()
    {
        echo "Fighter planes are really fast!!\n";
    }
}

$F16 = new FighterPlane(2);
echo $F16->numberOfWings;
echo PHP_EOL;
$F16->canFly();
$F16->canTakeOff();
$F16->canLand();
