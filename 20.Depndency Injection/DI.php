<?php

class Person{
    public $name1 = "Alex";

    public function getName(){

    }
}

class Dog{
    public $name2;
    
    function __Construct($person1){
        $this->name2 = $person1->name1;
    }
}

$person1 = new Person();
$dog1 = new Dog($person1);
echo $dog1->name2;


// Dependency injection is about creating
// relationship between two objects (especially between parent and child when we have inheritance).

// Dependency injection is a procedure where one object supplies the dependencies of another object.
// Dependency Injection is a software design approach that allows avoiding hard-coding dependencies and
// makes it possible to change the dependencies both at runtime and compile time.