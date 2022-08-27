<?php
class Fruit
{
    public $name;
    public $color;

    public function __construct($name)
    {
        $this->name = $name;
    }

    //Testing With Function
    // function fruit(){
    //     echo "The fruit name is {$this->name}";
    // }
    public function __destruct()
    {
        echo "The fruit is {$this->name}.";
    }
}

$apple = new Fruit("Apple");
// $apple->fruit();
