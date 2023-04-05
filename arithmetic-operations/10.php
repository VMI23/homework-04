<?php


class Geometry
{
    public static function circleArea(float $radius)
    {
        return $radius > 0 ? round($radius * pi() * 2, 1) : "Value must be positive number!";
    }

    public static function rectangleArea(float $length, float $width)
    {
        return ($width > 0 && $length > 0) ? round($length * $width, 1) : "Value must be positive number!";
    }

    public static function triangleArea(float $base, float $height)
    {
        return ($base > 0 && $height > 0) ? round($base * $height * 0.5, 1) : "Value must be positive number!";
    }


}

function choseGeometry()
{
    echo "Geometry Calculator\n";
    echo "1. Calculate the Area of a Circle\n";
    echo "2. Calculate the Area of a Rectangle\n";
    echo "3. Calculate the Area of a Triangle\n";
    echo "4. Quit\n";

    $choice = readline("Enter your choice (1-4) : \n");

    switch (true) {
        case ($choice == 1):
            $radius = readline("Enter radius: ");
            echo Geometry::circleArea($radius);
            break;
        case ($choice == 2):
            $length = readline("Enter length: ");
            $width = readline("Enter width: ");
            echo Geometry::rectangleArea($length, $width);
            break;
        case ($choice == 3):
            $base = readline("Enter base : ");
            $height = readline("Enter height : ");
            echo Geometry::triangleArea($base, $height);
            break;
        default:
            echo "Invalid input";
            break;
    }


}

choseGeometry();


