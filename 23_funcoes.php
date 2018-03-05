<?php

$taxa = 2;

function sum(int $n1, int $n2):Array
{
    global $taxa;

    $teste = 12;
    $soma = ($n1 + $n2) * $taxa;

    return [
        'teste' => $teste,
        'soma'  => $soma,
    ];
}

//$result = sum(1,2);
//var_dump($result['soma']);
//echo sum(2,2);
//echo sum(2,2)['soma'];