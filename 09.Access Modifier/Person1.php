<?php

class Person1
{
    //==========================
    //  PUBLIC ACCESS MODIFIER
    //==========================

    //The following "public" is called access modifier
    public $name;
    public $age;

    public function SetInfo()
    {
        return "My name is {$this->name} and  i'm {$this->age} years old.";
    }

    public function getInfo()
    {
        echo $this->setInfo();
    }
}

$Setu = new Person1();
$Setu->name = "Faisal Ahammed";
$Setu->age = 29;

echo $Setu->getInfo();
