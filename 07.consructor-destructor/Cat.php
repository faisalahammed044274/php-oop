<?php

class Cat
{


    //Property
    public $color;  //04. Assign here
    public $weight; //04. Assign here

    //Contructor with parameters
    public function __construct($color, $weight) //02.assign here
    {
        $this->color = $color; //03. Get data from 02
        $this->weight = $weight; //03. Get data from 02
    }

    public function describeCatDetails()
    {
        echo "Our cat is {$this->color} and weight is {$this->weight} KG."; //
    }
}

$myCat = new Cat("black", 2.5); //01. get data
$myCat->describeCatDetails(); //00.call from here
