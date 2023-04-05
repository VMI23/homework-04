<?php
function pay($basePay, $hrs)
{
    $totalPay = 0;
    $overtime = 1.5 * ($hrs - 40) * $basePay;
    if ($basePay < 8) {
        return "Base pay less than $8.0!";
    } elseif ($hrs > 60) {
        return "Hours more than 60!";
    } else {
        if ($hrs > 40) {
            return "Total pay is: " . $totalPay = 40 * $basePay + $overtime;
        } else {
            return "Total pay is: " . $totalPay = $basePay * $hrs;
        }
    }

}

$employees = [["Employee 1", 7.5, 35], ["Employee 2", 8.2, 47], ["Employee 3", 10, 73],];

function main($employees)
{
    foreach ($employees as $employee) {
        echo "Name: " . $employee[0] . PHP_EOL;
        echo "Base rate: " . $employee[1] . PHP_EOL;
        echo "hrs: " . $employee[2] . PHP_EOL;
        echo pay($employee[1], $employee[2]);
        echo PHP_EOL;
        echo "=========";
        echo PHP_EOL;

    }

}

main($employees);