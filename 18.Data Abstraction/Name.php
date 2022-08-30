<?php
abstract class Name{
    abstract protected function sayMyName($name);
}

class MyName extends Name{
    public function sayMyName($name){
        return "My name is {$name}.";
    }
}

$myname = new MyName();
echo $myname->sayMyName("Faisal");


// Data abstraction in PHP is a concept and it means any representation of data in which the implementation details are hidden or abstracted. It shows only useful information, remaining are hidden form the end user.

// Data abstraction is used to hide the working style of an object, and to show information of an object in something understandable form.