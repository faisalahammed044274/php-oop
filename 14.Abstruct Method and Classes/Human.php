<?php

abstract class Human
{

    abstract public function canTalk();

    public function canWalk()
    {
        echo "I can walk !\n";
    }

    public function canEat()
    {
        echo "I can eat !";
    }
}

class Man extends Human
{
    public function canTalk()
    {
        echo "I can talk !\n";
    }
}

$man1 = new Man();
$man1->canTalk();
$man1->canWalk();
$man1->canEat();

//we cannot create an instance of an abstract class
// $human1 = new Human();
