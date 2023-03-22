<?php

$polaznici=file_get_contents(__DIR__.'/polaznici.json'); //čitanje sadržaja datoteke
$polazniciNiz=json_decode($polaznici, true); //prebacivanje u niz
?>

<!--Ispis podataka u tablicu -->
<table border="1" cellpadding="10">
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godine</th>
            <th>Email</th>
            <th>Telefon</th>
        </tr>
        <?php
           foreach($polazniciNiz as $polaznik){
            echo '<tr>';
            echo '<td>'. $polaznik['name']. '</td>';
            echo '<td>'. $polaznik['surname']. '</td>';
            echo '<td>'. $polaznik['age']. '</td>';
            echo '<td>'. $polaznik['email']. '</td>';
            echo '<td>'. $polaznik['phone']. '</td>';
            echo '</tr>';
           }
        ?>

    </table> <!--Gotovo prebacivanje podataka u tablicu -->

<?php
    //Dodavanje novog polaznika
    $polazniciNiz[]=[
        "name"=>"Ivan",
        "surname"=>"Mandić",
        "age"=> 30,
        "email"=>"ivan.mandic@gmail.com",
        "phone"=> 38599888999,

    ];

//Transformiranje u JSON
$polazniciJson = json_encode($polazniciNiz);
//Zapisivanje novih podataka u datoteku
file_put_contents(__DIR__.'/polaznici.json', $polazniciJson);

