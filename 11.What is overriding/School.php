<?php

class School{

    public $schoolName;
    public $schoolStep;

    function __construct($schoolName, $schoolStep){
        $this->schoolName = $schoolName;
        $this->schoolStep = $schoolStep;
    }

    function showSchoolInfo(){
        echo "{$this ->schoolName}. \n";
        echo "{$this ->schoolStep}.\n";
    }
}

class Student extends School{
    public $studentName;
    public $studentAge;

    function __construct($studentName, $studentAge, $school){
        $this->studentName = $studentName;
        $this->studentAge = $studentAge;

        $this->schoolName = $school->schoolName;
        $this->schoolStep = $school->schoolStep;
    }

    function showStudentInfo(){
        echo " My name is {$this->studentName}. and i am ";
        echo "{$this->studentAge} years old. ";

        echo "My school name is {$this ->schoolName} & it's my \n";
        echo "{$this ->schoolStep} school.\n";
    }
}

$mySchool = new School("KG and High School", "secondary");

$student1 = new Student("Faisal", 25, $mySchool);

// $mySchool->showSchoolInfo();
$student1->showStudentInfo();