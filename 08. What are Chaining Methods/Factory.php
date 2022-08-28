<?php

class Factory
{

    public function process1()
    {
        echo "Process 1 Completed\n";
        return $this;
    }

    public function process2()
    {
        echo "Process 2 completed\n";
        return $this;
    }

    public function process3()
    {
        echo "Process 3 completed\n";
        return $this;

    }

    public function process4()
    {
        echo "Process 4 completed\n";
        return $this;
    }

    public function process5()
    {
        echo "Process 5 completed\n";
    }

}

$factory1 = new Factory();
$factory1->process1()->process2()->process3()->process4()->process5();
