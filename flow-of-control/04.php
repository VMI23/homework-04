<?php
//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6,
//respectively.
//Otherwise, it shall print "Not a valid day".
//
//Use:


//a "nested-if" statement


$n = 0;

//if($n>=0 && $n<7){
//    if ($n==0){
//        echo "Sunday";
//    }elseif ($n==1){
//        echo "Monday";
//    }elseif ($n==2){
//        echo "Tueasday";
//    }elseif ($n==3){
//        echo "Wednesday";
//    }elseif ($n==4){
//        echo "Thursday";
//    }elseif ($n==5){
//        echo "Friday";
//    }elseif ($n==6){
//        echo "Saturday";
//    }
//}else{
//    echo "Not a valid day!";
//}


//a "switch-case-default" statement.
$day = 0;
switch ($day) {
    case 0:
        echo "Sunday";
        break;
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    default:
        echo "Invalid day";
        break;
}




