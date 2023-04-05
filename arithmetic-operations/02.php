<?php
//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
// or “Even Number” otherwise. The program shall always print “bye!” before exiting.

function CheckOddEven(int $n): void
{
    echo ($n % 2 === 0) ? "Even Number" . PHP_EOL : "Odd Number" . PHP_EOL;
    echo "bye!";
}

CheckOddEven(3);