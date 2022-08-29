<?php

interface Human{
    public function canSpeak();
    public function canWalk();
    public function canSmell();
}

class Women implements Human{
    public function canSpeak(){
        echo "Hello! I'm Women & I can talk.\n";
    }

    public function canWalk(){
        echo "I can Walk.\n";
    }

    public function canSmell(){
        echo "I can Smell.";
    }
}
class Men implements Human{
    public function canSpeak(){
        echo "Hello! I'm Men & I can talk.\n";
    }

    public function canWalk(){
        echo "I can Walk.\n";
    }

    public function canSmell(){
        echo "I can Smell.";
    }
}

$women1 = new Women();
$women1->canSpeak();
$women1->canWalk();
$women1->canSmell();
echo PHP_EOL;
$men1 = new Men();
$men1->canSpeak();
$men1->canWalk();
$men1->canSmell();