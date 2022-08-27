<?php

class Person
{

    // function __construct(){
    //     echo "Jhon is a really good guy !";
    // }

    //Property
    public $name;
    public $age;
    public $height;

    //Contructor with no parameters
    public function __construct()
    {
        $this->name = "Setu";
        $this->age = 30;
        $this->height = 180;
    }

    public function describePerson()
    {
        echo "{$this->name} is {$this->age} years old and he is {$this->height} cm tall.";
    }
}

$setu = new Person();
$setu->describePerson();
