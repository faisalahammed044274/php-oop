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
$myChair1 = new Chair('Modern', '3');
$myChair1->ChairDetails();
echo PHP_EOL;
$myChair2 = new Chair();
$myChair2->type = "Classical";
$myChair2->numberOfLegs = 4;
$myChair2->ChairDetails();
