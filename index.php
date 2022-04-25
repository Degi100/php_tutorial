<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <style>
    </style>
</head>

<body>

    <span class="d-block p-2 bg-dark ">
   
        <a href="index.php?page=start">Start</a>
        <a href="index.php?page=contacts">Contacts</a>
        <a href="index.php?page=impressum">Impressum</a>
    </span>

    <?php
    $headline = "Herzlilch Willkommen";

    if ($_GET['page'] == 'contacts') {
        $headline = 'Deine Kontakte';
    }

    if ($_GET['page'] == 'impressum') {
        $headline = 'Impressum';
    }

    echo '<h1>' . $headline . '</h1>';

    if ($_GET['page'] == 'contacts') {
        echo "
        <p>Auf dieser Seite hast einen Ueberblick zu deinen <b>Kontakten</b></p>
        ";
    } else if ($_GET['page'] == 'impressum') {
        echo "Impressum";
    } else {
        echo "Du bist auf der Startseite";
    }
    ?>

    <div class="footer">
        PHP Trainee
    </div>
</body>

</html>
