<?php

/**
 * Calculate the monthly salary of an employee who may take some days off
 * and works 5 days a week, for 8 hours per day given  that each month has 23 working days.
 *
 * The eemployee earns 15 Euros per hour.
 */

 class Salary{
    function calculateSalary($name,$daysoff){
        $monthlySalary = (23 - $daysoff)*8*15;
        echo "The salary of {$name} in this month is $monthlySalary euros!";
    }
 }

 $AugustSalary = new Salary();
 $AugustSalary->calculateSalary("Setu",2);
