<?php
//Create Class
class Car{
    //Property
    public $color = "Red\n";

    //Method
    function startEngine(){
        echo "This Car can now start moving";
    }
}

//create an object of the car class or an instance of the car class.

$car1 = new Car();


//access the property

echo $car1->color;

//access the method
$car1->startEngine();