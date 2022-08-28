<?php
class Greeting
{
    public function hello()
    {
        echo "Hello There!\n";
        return $this;
    }
    public function bye()
    {
        echo "Goodbye for now!\n";
    }
}

$greeting1 = new Greeting();
$greeting1->hello()->bye();
