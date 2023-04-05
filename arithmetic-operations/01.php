<?php
//Write a program to accept two integers and return true
//if the other one is 15 or if their sum or difference is 15.

function fifteen(int $number1, int $number2): bool
{

    $sum = $number1 + $number2;
    $difference = abs($number1 - $number2);

    return ($number1 === 15 || $number2 === 15 || $sum === 15 || $difference === 15);


}

var_dump(fifteen(-1, 16));