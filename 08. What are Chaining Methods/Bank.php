<?php

class Bank
{
    public $balance = 800;
    public $amount;

    public function account()
    {
        echo "Your account has " . $this->balance . " euros.\n";
        $this->amount = 750;
        return $this;
    }

    public function withdraw()
    {
        echo "You can  not withdraw " . $this->amount . " euros.\n";
        $this->balance = 700;
        return $this;
    }

    public function tryAgain()
    {
        echo "You can withdraw less than " . $this->balance . " euros.\n";
    }

}

$bank1 = new Bank();
$bank1->account()->withdraw()->tryAgain();
