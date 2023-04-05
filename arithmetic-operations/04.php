<?php

//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
//Take note that it is the same as factorial of N.

function factorial(int $n): int
{

    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;

}


echo factorial(10);