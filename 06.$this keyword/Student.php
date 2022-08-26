<?php

//Combination of how to access properties and methods
//inside the class with $this keyword

class Student
{

    // properties
    public $name = "Alex";

    // method
    public function getName()
    {
        return $this->name;
    }

    public function presentStudent()
    {
        echo $this->getName() . " is the best student in the school.";
    }

}

//create object
$student1 = new Student();
$student1->presentStudent();
