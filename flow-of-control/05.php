<?php

$userInput = strtoupper(readline("enter characters: "));
$output = "";

for ($i = 0; $i < strlen($userInput); $i++) {
    $letter = $userInput[$i];
    if ($letter == "A") {
        $output .= "2";
    } else if ($letter == "B") {
        $output .= "22";
    } else if ($letter == "C") {
        $output .= "222";
    } else if ($letter == "D") {
        $output .= "3";
    } else if ($letter == "E") {
        $output .= "33";
    } else if ($letter == "F") {
        $output .= "333";
    } else if ($letter == "G") {
        $output .= "4";
    } else if ($letter == "H") {
        $output .= "44";
    } else if ($letter == "I") {
        $output .= "444";
    } else if ($letter == "J") {
        $output .= "5";
    } else if ($letter == "K") {
        $output .= "55";
    } else if ($letter == "L") {
        $output .= "555";
    } else if ($letter == "M") {
        $output .= "6";
    } else if ($letter == "N") {
        $output .= "66";
    } else if ($letter == "O") {
        $output .= "666";
    } else if ($letter == "P") {
        $output .= "7";
    } else if ($letter == "Q") {
        $output .= "77";
    } else if ($letter == "R") {
        $output .= "777";
    } else if ($letter == "S") {
        $output .= "7777";
    } else if ($letter == "T") {
        $output .= "8";
    } else if ($letter == "U") {
        $output .= "88";
    } else if ($letter == "V") {
        $output .= "888";
    } else if ($letter == "W") {
        $output .= "9";
    } else if ($letter == "X") {
        $output .= "99";
    } else if ($letter == "Y") {
        $output .= "999";
    } else if ($letter == "Z") {
        $output .= "9999";
    }
}

echo $output;