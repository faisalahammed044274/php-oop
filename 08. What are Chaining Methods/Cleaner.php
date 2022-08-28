<?php

class Cleaner
{
    public $name;

    public function wipeTheFloor()
    {
        echo "Please first wipe the floor ";
        $this->name = "Alex";
        return $this;
    }

    public function mopTheFloor()
    {
        echo "and then mop it " . $this->name . " !";
    }
}

$cleaner = new Cleaner();
$cleaner->wipeTheFloor()->mopTheFloor();
