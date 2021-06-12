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
    <title>Antras uždavinys</title>
</head>
<body style="background-color: <?=$color?>; ">
    <h1 style="color: white"> Antra užduotis </h1>
    <a href="http://localhost/barsukas/08_ND/02.php">Pirmas puslapis </a>
    <a href="http://localhost/barsukas/08_ND/02.php/?color=ff1234"> Antras puslapis </a>
</body>
</html>