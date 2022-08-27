<?php

class Chair
{
    //Property
    public $type;
    public $numberOfLegs;

//Construct
    public function __construct($type = "", $numberOfLegs = "")
    {
        $this->type = $type;
        $this->numberOfLegs = $numberOfLegs;

    }

//Method

    public function ChairDetails()
    {
        echo "This is a {$this->type} Chair and it has {$this->numberOfLegs} Legs.";
    }

}

//Object
$myChair = new Chair();
$myChair->type = "Easy";
$myChair->numberOfLegs = 4;
$myChair->ChairDetails();
