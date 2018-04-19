<?php

$file = fopen('projetoX.log', 'a+');
while (!feof($file)) {
    echo fgets($file, 4096) . '<br>';
}
fclose($file);