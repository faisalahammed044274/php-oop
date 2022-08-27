<?php

class Tree
{

    //Properties
    public $leavesColor;
    public $numberOfLeaves;

    //Construct
    public function __construct($leavesColor = "", $numberOfLeaves = "")
    {
        $this->leavesColor = $leavesColor;
        $this->numberOfLeaves = $numberOfLeaves;
    }

    public function describeTree()
    {
        echo "This tree have {$this->numberOfLeaves} {$this->leavesColor} leaves.";
    }
}

// case 1 : With Parameters
$tree1 = new Tree('Green', '45');
$tree1->describeTree();
echo PHP_EOL;
// case 2 optional parameters
$tree2 = new Tree();
$tree2->leavesColor = "Grey";
$tree2->numberOfLeaves = 6577;
$tree2->describeTree();
