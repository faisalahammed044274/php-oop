<?php

class Student{


    //Property
    public $name; //04.get the value from __contruct
    public $grade; //04.get the value from __contruct

    //create contructor with parameters
    function __construct($name, $grade){ //02 get the parameter data
        $this->name = $name; //03 Assign the value into $this->name property
        $this->grade = $grade; //03 Assign the value into $this->grade property
    }

    //Method
    function printStudentInfo(){
        echo "{$this->name} graduated high school with {$this->grade} Grade."; //get data prom
    }

}

//Object
$mike = new Student('Mike', 'A'); //01 get this value into the parameters
$mike->printStudentInfo(); //After calling the method it with show
