<?php

class Door{

    public function open(){
        echo "I can open this door";
        return $this->close();

    }

    private function close(){
        echo" and also able to close it.";
    }

}

$newDoor = new Door();
$newDoor->open();
// $newDoor->close();