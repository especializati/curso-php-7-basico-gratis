<?php

$cart = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata'
];

echo '<pre>';
arsort($cart);
var_dump($cart);

echo '<hr>';

asort($cart);
var_dump($cart);

echo '<hr>';

sort($cart);
var_dump($cart);

echo '<hr>';