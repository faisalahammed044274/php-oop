<?php

//How to access methods inside the class with $this keyword

class PaintBrush
{
    //Methods
    public function hasColor()
    {
        return "This Paint Brush has a red color.";
    }

    public function showColor()
    {
        echo $this->hasColor();
    }
}

// create object / instance of the class

$paintbrush = new PaintBrush();
$paintbrush->showColor();
