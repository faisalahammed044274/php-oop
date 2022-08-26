<?php

//How to access methods inside the class with $this keyword

class Dog{

    //methods
    function makeSound(){
        return "Wooff Woff";
    }

    function echoSound(){
        echo $this->makeSound();
    }
}

$dog1 = new Dog();
$dog1->echoSound();