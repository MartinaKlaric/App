<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $viewData['title'] ?></title>
</head>
<body>
    <h1><?= $viewData['title'] ?></h1>
    <?php foreach ($viewData['data'] as $media) {
        echo "<h4>Medij: $media->Naziv</h4>";
    } ?>
</body>
</html>