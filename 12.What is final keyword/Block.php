<?php

final class Block{
    public $address = "42 Smith avenue";
}

class Apartment extends Block{

}

$myAppartment = new Apartment();
echo $myAppartment->address;