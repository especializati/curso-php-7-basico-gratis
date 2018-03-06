<?php

// 4 => 4*3*2*1 = 24
// 2 => 2*1 = 2
// 3 => 3*2*1 = 6

function factorial(int $number): int
{
    if ($number <= 1)
        $number = $number;
    else
        $number *= factorial($number -1);

    return $number;
}

echo factorial(4);