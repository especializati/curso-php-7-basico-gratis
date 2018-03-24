<?php

$name = 'Carlos Ferreira';

if (isset($name))
    echo $name;
else
    echo 'Não existe!';

unset($name);

if (isset($name))
    echo $name;
else
    echo 'Não existe!';
