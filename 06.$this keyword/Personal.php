<?php
class Person
{
    // property
     public $name = 'Alexender';

    // method
    function printName(){
        echo "My name is $this->name";
    }
}

//Create an Object / instance of that class
$personal = new Person();
$personal->printName();

