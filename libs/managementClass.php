<?php

namespace Core;

class managementClass
{
    private static ?managementClass $instance = null;
    private array $managementClass = [];

    private function __construct()
    {
        $this->managementClass = require 'config/databaseParcijalni.php';;
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            return self::$instance = new managementClass();
        }

        return self::$instance;
    }

    public function get(string $key)
    {
        return array_key_exists($key, $this->managementClass) ? $this->managementClass[$key] : null;
    } 
}