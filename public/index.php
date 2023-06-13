<?php

use Core\Application;

define('ROOT', realpath(__DIR__ . '/../'));
define('CONFIG', ROOT . '/config');

require ROOT . '/vendor/autoload.php';
require CONFIG . '/routes.php';

$databaseConfig = require CONFIG . '/database.php'; //ulazimo u config folder i u database.php

define('DB_DSN', "mysql:host={$databaseConfig['host']};dbname={$databaseConfig['database']}");
define('DB_USERNAME', $databaseConfig['username']); //konstanta DB_USERNAME je zapravo username iz databaseConfig
define('DB_PASSWORD', $databaseConfig['password']);


(new Application())->run();
