<?php

use Core\Application;

define('ROOT', realpath(__DIR__ . '/../'));
define('CONFIG', ROOT . '/config');

require ROOT . '/vendor/autoload.php';
require CONFIG . '/routes.php';


(new Application())->run();
