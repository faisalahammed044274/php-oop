<?php

class Dice{

    private $min = 1;
    private $max = 6;

    public function rollTheDice(){
        echo rand($this->min, $this->max);
    }
} 

$rollDice = new Dice();
$rollDice->rollTheDice();