<?php
 class Person{

    function screenMyName($name, $age){
        echo "My name is {$name} and my age is {$age}";
    }

 }

 $faisal = new Person();
 $faisal->screenMyName('Faisal','29');