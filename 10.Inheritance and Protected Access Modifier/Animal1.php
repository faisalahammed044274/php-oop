<?php

//====================================================
//  Inheritance  =  extends with the previous method
//====================================================

//Animal 1  is called parent class and super class or base class

class Animal1
{

    public $name;
    public $weight;

    public function sleep()
    {
        echo "\nI am sleeping now.";
    }

}
//Dog Class is called child class or subclass or derived class.
class Dog extends Animal1
{

    public function weight()
    {
        echo "\n{$this->name}'s weight {$this->weight} Kg.";
    }
}

// $animal1 = new Animal1();
// echo $animal1->name = "Sparky\n";
// echo $animal1->weight = 120;
// $animal1->sleep();

$dog1 = new Dog();
echo $dog1->name = "Tommy\n";
echo $dog1->weight = 7 . " KG";
$dog1->sleep();
$dog1->weight();
