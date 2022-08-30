<?php

class Apple{
    static public $color = "Red";
    static public function hasTaste(){
        echo "Apple have great taste !";
    }
}

echo Apple::$color;
echo PHP_EOL;
echo Apple::hasTaste();