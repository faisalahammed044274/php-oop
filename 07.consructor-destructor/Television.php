<?php

class Television{
    //Property
    public $brand;
    public $dimensions;

    //create a constructor - with no parameters
    function __construct(){
        $this->brand = "Samsung";
        $this->dimensions = 50;
    }

    function printInfo(){
        return "This is a {$this->dimensions} inches {$this->brand} television.";
    }
}

//Object
$samsung = new Television();
echo $samsung->printInfo();