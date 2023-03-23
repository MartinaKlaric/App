<?php


$submitted=!empty($_GET);
?>

<p>Form submitted?
    <?php
    if ($submitted){
        echo 'Submitted!';

    }
    else{
        echo 'Not submitted';
    }
    ?>
</p>   

<ul>
    <li><b>Ime:</b></li><?=$_GET['firstname'];?>
    <li><b>Prezime:</b></li><?=$_GET['lastname'];?>
</ul>    