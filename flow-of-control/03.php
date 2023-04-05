<?php
//Write a program that reads a positive integer
//and count the number of digits the number has.

$num = readline("Enter number: ");
$counter = 0;

//for ($i=0; $i<strlen($num);$i++){
//    $counter++;
//}
//echo $counter;

//==================

while ($num > 0) {

    $num = round(($num / 10), 0);
    $counter++;
}

echo $counter;
