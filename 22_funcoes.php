<?php

function pt(String $value)
{
    echo "{$value} <br>";
}
// pt('Algo');

function sum(int $n1, int $n2): int
{
    return $n1 + $n2;
}
// echo sum(12, 90);

function sumTwo(int $n1, int $n2, int $taxa = 2):int
{
    return ($n1 + $n2) * $taxa;
}
echo sumTwo(1,2);