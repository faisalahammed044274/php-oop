<?php

class BasicCalculator
{
    public function showResult($number1, $operation, $number2)
    {
        switch ($operation) {
            case "+":
                $result = $number1 + $number2;
                echo "The result of $number1 + $number2 is : " . $result;
                break;

            case "-":
                $result = $number1 - $number2;
                echo "The result of $number1 - $number2 is : " . $result;
                break;

            case "*":
                $result = $number1 * $number2;
                echo "The result of $number1 * $number2 is : " . $result;
                break;

            case "/":
                $result = $number1 / $number2;
                echo "The result of $number1 / $number2 is : " . $result;
                break;
            default:
                echo "I think you are not sending any input data can you please fill the input operator to execute.";
        }
    }
}

$calculator1 = new BasicCalculator();
$calculator1->showResult(8, '', 4);
