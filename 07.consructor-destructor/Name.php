<?php

class Name{

    public $name = "";

    function __construct($name){ //02 pass data here
        $this->name = $name; //03 get $name data
        echo "My Name is $this->name\n \n"; //04 as a magic method it was run
    }

    //Create a destructor
    function __destruct(){
        $empty = $this->name = "";
        echo "Delete my name : " . $empty;
    }

}

$name1 = new Name("Alex"); //01.get value