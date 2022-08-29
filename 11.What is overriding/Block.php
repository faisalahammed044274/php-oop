<?php

class Block
{
    public $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function printAddress()
    {
        echo "This block is at " . $this->address;
    }
}

class Apartment extends Block
{
    public function __construct($block)
    {
        echo "\nhey i am apartment not block i am in at " . $this->address = $block->address . ".\n";
    }
}

$myBlock = new Block("Mirpur 12");

$apartment1 = new Apartment($myBlock);
$apartment1->printAddress();
