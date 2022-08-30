<?php

class Countdown{


    private $maxDuration;

    public function startCountdownFromTenTo($time){
        for($dutration = 10; $dutration > $time; $dutration--){
            sleep(1);
            $this->maxDuration = $this->maxDuration - 1;
            echo $this->maxDuration . "\n";
        }
    }
}


$timer1 = new Countdown();
$timer1->startCountdownFromTenTo(7);