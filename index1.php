<?php
// inputs
$num1 = 5;
$num2 = 3;
//Change the operator value to be one of  (addtion "+" / substraction "-" /multiplication "*" / division "/")
$operator = "+";
switch ($operator) {
        //addtion case
    case "+":
        echo "<h1>Result is: " . ($num1 + $num2) . "</h1>";
        break;
        //substraction case
    case "-":
        echo "<h1>Result is: " . ($num1 - $num2) . "</h1>";
        break;

        //multiplication case
    case "*":
        echo "<h1>Result is: " . ($num1 * $num2) . "</h1>";
        break;

        //division case
    case "/":
        echo "<h1>Result is: " . ($num1 / $num2) . "</h1>";
        break;
}
