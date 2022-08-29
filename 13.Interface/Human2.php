<?php

interface Human{
    public function canSpeak();
    public function canWalk();
    public function canSmell();
}
interface HumanCharacteristics{
    public function hasHeight();
    public function hasweight();
}

class Women implements Human, HumanCharacteristics{
    public function canSpeak(){
        echo "Hello! I'm Women & I can talk.\n";
    }

    public function canWalk(){
        echo "I can Walk.\n";
    }

    public function canSmell(){
        echo "I can Smell.\n";
    }
    public function hasHeight(){
        echo "My height is 5.6 Inch\n";
    }
    public function hasWeight(){
        echo "My weight is 58 KG\n";
    }
}


$women1 = new Women();
$women1->canSpeak();
$women1->canWalk();
$women1->canSmell();

$women1->hasHeight();
$women1->hasWeight();