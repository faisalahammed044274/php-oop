<?php

class Home
{
//properties
    public $door;
    public $window;
    public $washroom;

//Construct
    public function __construct($door, $window)
    {
        $this->door = $door;
        $this->window = $window;
        echo "This room are included with {$this->door} doors and {$this->window} windows.";
    }

//Destruct
    public function __destruct()
    {
        echo $this->washroom = "";
    }
}

//Object
$myHome1 = new Home('2','4');
