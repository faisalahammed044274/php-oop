<?php

//==================================
//  Public access modifier
//==================================

// class Animal4
// {
//     public $name = "Sparky";

//     public function getName()
//     {
//         return "The animal's name is $this->name";
//     }

// }

// class Dog extends Animal4
// {

// }

// $dog1 = new Dog();

// echo $dog1->getName();

//=================================================
//  Protected access modifier with getter setter
//=================================================

// class Animal4
// {
//     protected $name = "Sparky";
//     // private $name = "Sparky";

//     protected function setName()
//     {
//         return "The animal's name is $this->name";
//     }

//     public function getName()
//     {
//         return $this->setName();
//     }

// }

// class Dog extends Animal4
// {

// }

// $dog1 = new Dog();

// echo $dog1->getName();

//=================================================
//  Private access modifier with getter setter
//=================================================

class Animal4
{
    private $name = "Sparky";

    private function setName()
    {
        return "The animal's name is $this->name.";
    }

    public function getName()
    {
        return $this->setName();
    }
}

class Dog extends Animal4
{

}

$dog1 = new Dog();
$dog1->name = "Sparky";
echo $dog1->getName();
