<?php

trait University{
    function showUniversityGrades(){
        echo "Your university grades are not very well ! <br>";
    }
}

trait School{
    function showSchoolGrades(){
        echo "Your school grades are very good <br>";
    }
}

class Student{
    use University;
    use School;

    function getAllGrades(){
        $this->showUniversityGrades();
        $this->showSchoolGrades();
    }
}

$student1 = new Student();
$student1->getAllGrades();


// Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies.

// Traits solve a problem in PHP which is multiple inheritance because we can not extend more than one class.

// To solve this issue we can create a class and use inside it as many traits we want.22.autoloading.php