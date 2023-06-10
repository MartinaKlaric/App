<?php

include 'vendor/autoload.php';
$dataConfig = require './configvjezba12/database12.php';

try {
   $connection = new PDO("mysql:host={$dataConfig['host']};
     dbname={$dataConfig['database']}", 
     $dataConfig['user'],
     $dataConfig['pass']);

} catch (\Throwable $th) {
   echo "Error while connecting\n";

   return;
}

try {
   $connection->beginTransaction();

   //Insert the metadata of the order into the database
   $preparedStatement=$connection->prepare(
      'INSERT INTO `orders`(`orderNumber`, `orderDate`, `requiredDate`, `status`, `customerNumber`)
       VALUES (:orderNumber, :orderDate, :requiredDate, :status, :customerNumber)'
   );

   $preparedStatement->bindValue(':orderNumber', 10426);
   $preparedStatement->bindValue(':orderDate', date('Y-m-d'));
   $preparedStatement->bindValue(':requiredDate', date('Y-m-d'));
   $preparedStatement->bindValue(':status', 'Shipped');
   $preparedStatement->bindValue(':customerNumber', 119);
   $preparedStatement->execute();

   //Construct the query for inserting the products of the order
   $preparedStatement=$connection->prepare(
      'INSERT INTO `orderdetails`(`orderNumber`, `productCode`, `quantityOrdered`, `priceEach`, `orderLineNumber`)
       VALUES (:orderNumber, :productCode, :quantity, :price, :orderLine)'
   );

   //Insert the products included in the order into the database
   $preparedStatement->bindValue(':orderNumber', 10426);
   $preparedStatement->bindValue(':productCode', 'S18_1749');
   $preparedStatement->bindValue(':quantity', 20);
   $preparedStatement->bindValue(':price', 50);
   $preparedStatement->bindValue(':orderLine', 3);
   $preparedStatement->execute();

   //Make the changes to the database permanent
   $connection->commit();

} catch (PDOException $e) {
   $connection->rollback();
   throw $e;
   echo "Error!\n";
}