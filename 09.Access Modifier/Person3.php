<?php

class Person3{
    private $name;

    //Setter sets new value to the property
    public function setName($name){
        $this->name = $name;
    }
    
    //a getter return the value
    public function getName(){
        return $this->name;
    }
}

$mary = new Person3();
$mary->setName("Mary");
echo $mary->getName();