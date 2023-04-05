<?php
$output = "";
foreach(str_split(strtoupper(readline("enter characters: "))) as $char) {
    switch($char) {
        case "A": $output .= "2"; break;
        case "B": $output .= "22"; break;
        case "C": $output .= "222"; break;
        case "D": $output .= "3"; break;
        case "E": $output .= "33"; break;
        case "F": $output .= "333"; break;
        case "G": $output .= "4"; break;
        case "H": $output .= "44"; break;
        case "I": $output .= "444"; break;
        case "J": $output .= "5"; break;
        case "K": $output .= "55"; break;
        case "L": $output .= "555"; break;
        case "M": $output .= "6"; break;
        case "N": $output .= "66"; break;
        case "O": $output .= "666"; break;
        case "P": $output .= "7"; break;
        case "Q": $output .= "77"; break;
        case "R": $output .= "777"; break;
        case "S": $output .= "7777"; break;
        case "T": $output .= "8"; break;
        case "U": $output .= "88"; break;
        case "V": $output .= "888"; break;
        case "W": $output .= "9"; break;
        case "X": $output .= "99"; break;
        case "Y": $output .= "999"; break;
        case "Z": $output .= "9999"; break;
    }
}
