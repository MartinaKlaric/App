<?php

namespace Core;
use PDO;

abstract class Model
{
    public function __construct(private PDO $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD))    //spajam se na bazu
    {
    }

    public function findAll(): array //dobit ćemo niz žanrova
    {
       $query = $this->connection->query(sprintf('SELECT * FROM %s', $this->getTable()));   //stavim placeholder %s i kažem što treba 
       //popuniti umjesto njega, a to je $this->getTable()
       $query->setFetchMode(PDO::FETCH_CLASS, $this->getClassName()); 

       return $query->fetchAll();
    }

    abstract function getClassName(): string; 

    abstract function getTable(): string;

}