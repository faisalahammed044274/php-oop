<?php

//create a class
class Person{

    //properties
    public $age;
    public $height;
    public $name;

    //method
    function greeting(){
        return "Hello All";
    }

}

//Create Object
// here person1 is an object of Person Class or it is called an instance of the Person Class 
$person1= new Person();

//access the property and assign value with echo.

echo $person1->age = 28 . "\n";
echo $person1->height = 5.6 . "\n";
echo $person1->name = 'Faisal' . "\n";

//access the method
echo $person1->greeting();