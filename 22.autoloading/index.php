<?php

require_once("class1.php");
require_once("class2.php");

$cl1 = new Class1();
$cl1->showInfo();

echo PHP_EOL;

$cl2 = new Class2();
$cl2->showInfo();


// An autoloading function loads a class, an interface, or a trait from a PHP file. Use the spl_autoload_register() function to autoload the classes, interfaces, and traits.

// Classes should be defined before they are used, but you can make use of autoloading to load classes when they are required

// Autoloading is the process of automatically loading PHP classes without explicitly loading them with the require(), require_once(), include(), or include_once() functions.

// Itis necessary to name your class files exactly the same as your classes. The class Views would be placed in Views.php, a class called Users would be stored in Users.php and so on.