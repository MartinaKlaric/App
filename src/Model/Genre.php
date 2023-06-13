<?php

namespace App\Model;
use PDO;

class Genre 
{
    public function __construct(private PDO $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD))    //spajam se na bazu
    {
    }

    public function findAll(): array //dobit ćemo niz žanrova
    {
       $query = $this->connection->query('SELECT * FROM zanr'); //doslovno upišem query kakav bih u DBeaveru za dohvat zanrova
       $query->setFetchMode(PDO::FETCH_CLASS, self::class); //na PDO predavanju obrađeno

       return $query->fetchAll();
    }

      
}


