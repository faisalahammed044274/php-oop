<?php

class Animal{
    final function makeSound(){
        echo "oooOOOOO";
    }
}

class Dog extends Animal{

    function makeSound(){
        echo "Gkrrrr";
    }
}

$dog = new Dog();
$dog->makeSound();