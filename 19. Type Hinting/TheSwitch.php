<?php
declare(strict_types = 1);

class TheSwitch
{
    public function setState(int $state): bool
    {
        if ($state == 0) {
            return false;
        } elseif ($state == 1) {
            return true;
        }
    }
}

$bedroomswitch = new TheSwitch();
var_dump($bedroomswitch->setState(0));
