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
    <title>Trečia užduotis</title>
</head>
<body style="background-color: <?=$color?>; ">
    <h1 style="color: white">Trečia užduotis</h1>
    <h2>
    <a href="http://localhost/barsukas/08_ND/03.php"> Spalva </a>
    </h2>
    <p style="color: pink"> Įrašyti spalvą </p>
    <form action="" method="get">
    <input type="text" name="color">
    <button type="submit">Submit</button>
    </form>
</body>
</html>