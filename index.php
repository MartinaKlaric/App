<?php

use Core\ConnectionParcijalni;

require_once 'vendor/autoload.php';

try {
    $connection = ConnectionParcijalni::getInstance();
    echo "Connected!\n";
}
catch (\Exception $e)
{
    echo $e->getMessage();
}
