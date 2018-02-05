<?php

// $cars = array(1, 'Carlos', 12.2);
// var_dump($cars[1]);

// $cars = ['Uno', 'Gol', 'Fusion', 'Civic'];
// var_dump($cars[2]);

/*
$car = [
    'cor' => 'Branco',
    'portas' => 4,
    'ano' => 2018,
];
$car['airbag'] = false;
$car['som'] = 'Model 123';
echo $car['cor'];
$car['cor'] = 'Black';
echo $car['cor'];
*/

$cars = [
    'Mercedes' => [
        'color' => 'black',
        'motor' => 5.2,
        'name'  => 'Nome do Carro da Mercedes' 
    ],
    'Ford' => [
        'color' => 'yellow',
        'motor' => 3.2,
        'name'  => 'Carro da Ford'
    ],
    'Ferrari' => [
        'color' => 'red',
        'motor' => 10,
        'name'  => 'Ferrari'
    ],
];

echo $cars['Ford']['name'];
$cars['Ford']['name'] = 'New name car ford';
echo $cars['Ford']['name'];