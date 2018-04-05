<?php

$photos = $_FILES['photos'];
$path = 'uploads/imgs/';

if (!is_dir($path)) {
    mkdir('uploads');
    mkdir($path);
}

for ($i = 0; $i < count($photos['name']); $i++) {
    $j = $i + 1;
    if ( move_uploaded_file($photos['tmp_name'][$i], $path . $photos['name'][$i]) )
        echo "Sucesso ao mover o arquivo {$j} <br>";
    else
        echo "Falha ao mover o arquivo {$j} <br>";
}