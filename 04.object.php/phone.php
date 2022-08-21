<?php
//Class
class Phone {

    //define property
    public $brand;

    //define method
    function sendMessage(){
        return "Write your Message";
    }

}

//create object or an instance of that class
$phone1 = new Phone(); 

//access  the property
echo $phone1->brand = "Samsung\n";

//call the methods
echo $phone1->sendMessage();