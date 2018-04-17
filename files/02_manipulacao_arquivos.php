<?php

$content = 'Algo Aqui';
$file = 'test.txt';

if (file_exists($file)) {
    // file_put_contents($file, $content);

    var_dump(file_get_contents($file));
} else {
    echo 'Arquivo não existe!';
}