<?php

class Person1
{

    //Overriden method
    public function whatAmI()
    {
        echo "I am just a person!";
    }

}

class Student extends Person1
{

    //Overriddding method
    public function whatAmI()
    {
        echo "I am just a Student.";
    }
}

$student1 = new Student();
$student1->whatAmI();
