<?php

//How to access properties inside the class with $this keyword

class Bicycle{

    //Properties
    public $type = "Mountain";
    public $color = "Green";

    //Method
    function giveBicycleDetails(){
        echo "This {$this->type} bicycle has a {$this->color} color.";
    }
}

//Create an object / instance of the class
$bicycle = new Bicycle();
$bicycle->giveBicycleDetails();