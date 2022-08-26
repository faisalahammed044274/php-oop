<?php
// Getters and Setters

class Teacher{
    //property
    public $name = ""; //5

    //set method or setter
    function setName($teacher_name){ //2
        $this->name = $teacher_name; // 3 & 4 - 2nd part and send data to $this->name
    }

    //get method or getter

    function getName(){
        echo "My teacher name is : {$this->name}"; //6 and it's shown
    }
}

//create Object
$myTeacher = new Teacher();
$myTeacher->setName('Reza'); //1
$myTeacher->getName();