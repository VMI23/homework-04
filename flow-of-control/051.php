<?php
$userInput = strtoupper(readline("enter characters: "));
$output = "";


for ($i = 0; $i < strlen($userInput); $i++) {

    $letter = $userInput[$i];

    if ($letter == "A" || $letter == "B" || $letter == "C") {
        $output .= "2";
    } else if ($letter == "D" || $letter == "E" || $letter == "F") {
        $output .= "3";
    } else if ($letter == "G" || $letter == "H" || $letter == "I") {
        $output .= "4";
    } else if ($letter == "J" || $letter == "K" || $letter == "L") {
        $output .= "5";
    } else if ($letter == "M" || $letter == "N" || $letter == "O") {
        $output .= "6";
    } else if ($letter == "P" || $letter == "Q" || $letter == "R" || $letter == "S") {
        $output .= "7";
    } else if ($letter == "T" || $letter == "U" || $letter == "V") {
        $output .= "8";
    } else if ($letter == "W" || $letter == "X" || $letter == "Y" || $letter == "Z") {
        $output .= "9";
    }
    echo $output;

}

