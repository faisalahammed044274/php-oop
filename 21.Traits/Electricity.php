<?php

trait Fan
{
    public function isFanOn()
    {
        echo "Fan is on when electricity is coming.\n<br>";
    }
}

trait Light
{
    public function isLightOn()
    {
        echo "Light is always on because it's depend on electricy or Solar.\n<br>";
    }
}

class Electricity
{

    use Fan;
    use Light;

    public function getAllInfo()
    {
        $this->isFanOn();
        $this->isLightOn();
    }

}

$electricitysupply1 = new Electricity();
$electricitysupply1->getAllInfo();
