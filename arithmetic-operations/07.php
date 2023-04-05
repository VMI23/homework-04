<?php
//gravity
//0.5 * a*pow(t,2) + v*t + x
//a = -9.81
//t = times(s) 10s
//v = init vel
//x = init pos

function position(int $time, int $initVel, int $initPos, float $accel = -9.81): void
{
    echo $position = 0.5 * $accel * pow($time, 2) + $initVel * $time + $initPos . "m ";
}


position(10, 0, 0);