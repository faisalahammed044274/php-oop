<?php

class Person2
{

    //==========================
    //  PRIVATE ACCESS MODIFIER
    //==========================

    //The private property or method can Only be accessed within the class.
    //So once it is defined as private nobody can change it or access it from outside
    //So in that case if we try to change it to private we get an error.

    public $name;
    private $age;

    private function setInfo()
    {
        $this->age = 29;
        return "My Name is {$this->name} and I am {$this->age} years old.";
    }
    public function getInfo()
    {
        echo $this->setInfo();
    }
}

$Setu = new Person2();
$Setu->name = "Faisal Ahammed";
// $Setu->age = 299;

echo $Setu->getInfo();
