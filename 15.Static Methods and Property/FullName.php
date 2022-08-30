<?php

class Fullname{

    static public $fullname; //3

    static public function sayMyName($myFirstName, $myLastName){ //1
        self::$fullname = "My Full Name is " . $myFirstName . " " . $myLastName . "."; //2
    }
}

Fullname::sayMyName("Faisal", "Ahammed");  //0
echo Fullname::$fullname; //4