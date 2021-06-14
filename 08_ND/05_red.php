<?php

if(isset($_GET['color'])) {
    if($_GET['color'] == 'blue') {
        header('Location: ./05_blue.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penkta užduotis</title>
</head>
<body style="background-color: red">
    <h1 style="color: white">Penkta užduotis</h1>
    <a href="?color=blue">Pomidoras</a>
</body>
</html>