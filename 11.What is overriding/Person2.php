<?php

class Person2{
    public $name = "Faisal";

    // overriden method
    public function showName(){
        echo "My Name is $this->name.";
    }
}

class Student extends Person2{

    //overriding method
    public function showName(){
        echo "My name is $this->name but my surname is Setu.";
    }
}

$student1 = new Student();
$student1->showName();