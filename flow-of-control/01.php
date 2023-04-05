<?php


$st = readline("Input the 1st number: ");

$nd = readline("Input the 2nd number: ");

$rd = readline("Input the 3rd number: ");

//todo print the largest number

//echo max($st,$nd,$rd);

switch (true) {
    case ($st > $nd && $st > $rd):
        echo $st;
        break;
    case ($nd > $st && $nd > $rd):
        echo $nd;
        break;
    default:
        echo $rd;
        break;
}