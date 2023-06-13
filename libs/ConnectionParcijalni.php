<?php

namespace Core;

use PDO;

class ConnectionParcijalni
{
    private static ?ConnectionParcijalni $instance = null;
    private PDO $connection;

    private function __construct()
    {
        $this->connection = new PDO('mysql:host=' . managementClass::getInstance()->get('host'). ';dbname=' . managementClass::getInstance()->get('database'), 
                                    managementClass::getInstance()->get('username'), managementClass::getInstance()->get('password'));
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            return self::$instance = new ConnectionParcijalni();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }

}