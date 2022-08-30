<?php

class Message{

    private $message; //3

    public function setMsg($sms){ //1
        $this->message = $sms; //2
    }

    public function getMsg(){
        echo "The message i received says : $this->message";
    }
}

$sms1 = new Message();
$sms1->setMsg("Hello PHP Data Encapsulation"); //0
$sms1->getMsg(); //4 and output
