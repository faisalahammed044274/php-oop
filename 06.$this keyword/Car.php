<?php
//Combination of how to access properties and methods
//inside the class with $this keyword

class Car{
    //properties
    public $color = "Red";
    public $brand = "Ferrari";
    //methods
    //get the properties Inside Method - 1
    function method1(){
        return "This {$this->color} {$this->brand} is very fast!";
    }

    function method2(){
        echo $this->method1();
    }
}

// create the object
$ferrari = new Car();
$ferrari->method2();