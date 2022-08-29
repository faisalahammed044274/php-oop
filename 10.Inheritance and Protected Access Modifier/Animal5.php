<?php

class Animal5{
    public $name = "Sparky";

    protected function getName(){
        return "The animal's name is $this->name.";
    }
}

class Dog extends Animal5{
    public function getDogName(){
        echo $this->getName();
    }
}

$dog1 = new Dog();
$dog1->getDogName();