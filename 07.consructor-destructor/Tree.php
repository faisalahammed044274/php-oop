<?php

class Tree{

    //Properties
    public $leavesColor;
    public $numberOfLeaves;

    //Construct
    public function __construct($leavesColor, $numberOfLeaves){
        $this->leavesColor = $leavesColor;
        $this->numberOfLeaves = $numberOfLeaves;
    }

    public function TreeDetails(){
        echo "This tree have {$this->leavesColor}  Leaves and number of leaves is {$this->numberOfLeaves}.";
    }
}

$Tree1 = new Tree('green','Seven');
$Tree1->TreeDetails();


?>