<?php

setcookie('cookie_test', 'Teste Cookie');
setcookie('auth', 'OK', (time() + (7 * 24 * 60 * 60)));

// echo $_COOKIE['cookie_test'];