<?php
//Exercise #9
//Write a program that calculates and displays a person's body mass index (BMI).
//A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
//Where weight is measured in pounds and height is measured in inches.
//Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
//A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
//If the BMI is less than 18.5, the person is considered underweight.
//If the BMI value is greater than 25, the person is considered overweight.
//
//Your program must accept metric units.

function bmi($weight, $height)
{//metric -> imperial
    $weight *= 2.20462;
    $height *= 39.3701;
    $bmi = round(($weight * 703 / pow($height, 2)), 1);
    echo "Your BMI is " . $bmi . PHP_EOL;
    switch (true) {
        case ($bmi < 18.5):
            echo "Underweight";
            break;
        case ($bmi >= 18.5 && $bmi <= 25):
            echo "Optimal weight";
            break;
        case ($bmi > 25):
            echo "Overweight";
            break;
        default:
            echo "Invalid input";
            break;
    }
}

bmi(90, 1.85);