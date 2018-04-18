<?php
$text = 'Hoje é um lindo dia';
generateLog($text);

function generateLog($text)
{
    $file = fopen('projetoX.log', 'a+');
    fwrite($file, "$text \r\n");
    fclose($file);
}