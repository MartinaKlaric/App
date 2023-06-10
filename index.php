<?php

use App\Videostore\Genre;

include 'vendor/autoload.php';
$databaseConfig = require './config/database.php'; //uključimo naš file u igru

try {
    $connection = new mysqli(
        username: $databaseConfig['username'],
        password: $databaseConfig['password'],
        database: 'videoteka');
    
} catch (\Throwable $th) {
    echo "Error while connecting to the database\n";                   

    return; 
}

try {
    $connection->begin_transaction(); //pokreni transakciju
    $connection->query("INSERT INTO zanr(Naziv) VALUES ('Dokumentarni')"); //dodaj zanr Dokumentarni
    $connection->commit(); //komitaj ...dok ovo ne pokrenem neće se u bazu ništa dodati
} catch (\Throwable $th) {
    $connection->rollback();
}