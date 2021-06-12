<?php

$color = "black";
if(isset($_GET['color'])) {
    $color = "red";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirma užduotis</title>
</head>
<body style="background-color: <?=$color?>; ">
    <h1 style="color: white">Pirma užduotis</h1>
    <h2>
    <a href="./01.php"> Pirmas puslapis </a>
    <a href="./01.php?color=1"> Antras puslapis </a>
    </h2>
</body>
</html>