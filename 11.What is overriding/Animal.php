<?php

class Animal
{
    public $numberOfEyes;

    public function __construct($numberOfEyes)
    {
        $this->numberOfEyes = $numberOfEyes;
    }

    public function showAnimalInfo()
    {
        echo "Most animals have $this->numberOfEyes eyes.\n";
    }
}

class Dog extends Animal
{
    public function __construct($animal)
    {
        $this->numberOfEyes = $animal->numberOfEyes;
    }
}

$myAnimal = new Animal(2);
// $myAnimal->showAnimalInfo();

$dog1 = new Dog($myAnimal);
$dog1->showAnimalInfo();
