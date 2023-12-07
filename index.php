<?php

session_start();

require('vendor/autoload.php');

date_default_timezone_set('America/Sao_Paulo');

define('INCLUDE_PATH','https://gleicimar.github.io/primeSite/');
define('INCLUDE_PATH_STATIC',INCLUDE_PATH.'App/Views/pages/');

$app = new App\Application();
$app->run();
