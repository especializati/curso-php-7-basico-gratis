<?php

$a = 2;
$b = 5;

$result = $a + $b;
echo "O resultado da soma entre {$a} + {$b} = {$result} <br>";

$result = $b - $a;
echo "O resultado da subtração entre {$b} - {$a} = {$result} <br>";

$result = $b * $a;
echo "O resultado da multiplicação entre {$b} * {$a} = {$result} <br>";

$result = $b / $a;
echo "O resultado da divisão entre {$b} / {$a} = {$result} <br>";

$result = $b % $a;
echo "O resultado do resto da divisão entre {$b} % {$a} = {$result} <br>";

if ($b % 2 == 0)
    echo 'Par';
else
    echo 'Impar';

$result = (2 + (2 - 10) / 4) * 2;
echo $result;