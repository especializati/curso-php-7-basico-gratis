<?php

/**
$state = 'São Paulo/SP';
$arrayState = explode('/', $state);
var_dump($arrayState[1]);
 */

$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);
var_dump($arrayInfo[2]);

echo '<hr>';

$arrayTest = [1,2,3,4,5];
//echo implode($arrayInfo, ' # ');
echo implode($arrayTest, ' - ');