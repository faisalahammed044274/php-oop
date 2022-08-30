<?php

class Name
{
    static public $name; //3

    static public function echoMyName($my_name){ //1
        self::$name = $my_name; //2
        //self keyword can access the property inside the class without an instance 
    }
}


Name::echoMyName("Faisal"); //0
echo "My Name is : " . Name::$name;

