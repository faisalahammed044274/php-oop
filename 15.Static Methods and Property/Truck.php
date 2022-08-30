<?php

class Truck
{
    public static $brand = "Volvo";

    public static function accelerate()
    {
        echo "Now i am increasing speed.";
    }
}

// $truck1 = new Truck();
// echo $truck1->brand;
// echo PHP_EOL;
// $truck1->accelerate();

//with Scope Resolution operator we can easily access the static method and property.
echo Truck::$brand;
echo PHP_EOL;
echo Truck::accelerate();
