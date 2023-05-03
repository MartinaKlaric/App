<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="obrada.php" method="POST" enctype="multipart/form-data">
        <p>
            <label>Odaberi file</label>
            <input type="file" name="userfile" />
        </p> 
        <p>
            <label>Send file</label>
            <input type="submit" name="sendfile" />
        </p> 
       
    </form>
</body>
</html>