
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni ispit - osnove PHP-a</title>
</head>
<body>
    <div class="center">
        <?php
        if($_SESSION['error message']==NULL){
            echo '<div><h1>Upišite riječ: </h1></div>';
        } elseif($_SESSION['error message']=='Empty'){
            echo '<div><h1>Polje ne smije biti prazno</h1></div>';
        } elseif($_SESSION['error message']=='NonLetterUsed'){
            echo '<div><h1>Treba koristiti samo slova.</h1></div>';
        }

        ?>
    </div>

    <div class="flex-container">
        <div id="form">
            <form action="provjera.php" method="post">
                <label>Upišite riječ:</label>
                <br>
                <input type="text" name="word">
                <br>
                <input type="submit" value="pošalji">
    </form>
    </div>
    <div>
        <?php
        $wordsJson=file_get_contents('words.json');
        $words=json_decode($wordsJson, true);
        ?>

        <table border="1", cellpadding="5">
            <tr>
                <th>Riječ</th>
                <th>Broj slova</th>
                <th>Broj suglasnika</th>
                <th>Broj samoglasnika</th>
            </tr>    
        <?php
        foreach($words as $word){
            echo "<tr>";
            echo    "<td>{$word['word']}</td>";
            echo    "<td>{$word['noChar']}</td>";
            echo    "<td>{$word['noCon']}</td>";
            echo    "<td>{$word['noVow']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </div>
    </div>           

</body>
</html>