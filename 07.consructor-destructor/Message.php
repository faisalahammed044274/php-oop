<?php

class Message
{

    //Construct
    public function __construct()
    {
        echo "This is a Message.\n";
    }

    //create a destructor
    public function __destruct()
    {
        echo "The Meassage is Deleted.";
    }
}

$sms = new message();
// $sms->message();
