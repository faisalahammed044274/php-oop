<?php

class Animal2
{
    public $name = "Sparky";
    protected $weight = 7;
}

class Dog extends Animal2
{

}

$dog1 = new Dog();

echo $dog1->name;
echo $dog1->weight;

//===============
//Get an Error
//===============

// SparkyPHP Fatal error:  Uncaught
// Error: Cannot access protected property
// Dog::$weight in D:\wamp64\www\php oop\10.Inheritance
// and Protected Access Modifier\Animal2.php:15
