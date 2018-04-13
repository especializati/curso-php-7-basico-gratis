<?php
session_start();

if (!isset($_SESSION['auth'])) {
    header('Location:38_set_sessoes.php');
}

echo 'Painel de Admin';

/**
$_SESSION['name']['lastname'] = 'Outro nome';

// include '38_set_sessoes.php';
// echo $name;
var_dump($_SESSION);
 */