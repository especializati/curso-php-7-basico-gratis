<?php

if ($_REQUEST['nome'] == '' && strlen($_REQUEST['nome']) <= 3) {
    echo 'O campo nome é inválido!';

    return;
}

echo "Nome: {$_REQUEST['nome']}";
echo '<hr>';
echo "Senha: {$_REQUEST['senha']}";
echo '<hr>';
echo "E-mail: {$_REQUEST['email']}";
echo '<hr>';
echo "Concordou? " . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Não';
echo '<hr>';
echo "Sexo: {$_REQUEST['sexo']}";
echo '<hr>';
echo "Estado: {$_REQUEST['estado']}";
echo '<hr>';
echo "Descrição: {$_REQUEST['descricao']}";
echo '<hr>';

/**
 * POST:
echo "Nome: {$_POST['nome']}";
echo '<hr>';
echo "Senha: {$_POST['senha']}";
echo '<hr>';
echo "E-mail: {$_POST['email']}";
echo '<hr>';
echo "Concordou? " . isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Não';
echo '<hr>';
echo "Sexo: {$_POST['sexo']}";
echo '<hr>';
echo "Estado: {$_POST['estado']}";
echo '<hr>';
echo "Descrição: {$_POST['descricao']}";
echo '<hr>';
 */