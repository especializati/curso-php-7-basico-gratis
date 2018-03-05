<?php

$names = ['a', 'b', 'c', 'd'];

$i = 0;

while ($i < count($names)) {
    echo $names[$i];

    $i++;
}

echo '<hr>';

$a = 11;
do {
    echo $a;

    $a++;
} while ($a <= 10);