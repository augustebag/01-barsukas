<?php

if((!empty($_GET)) && (empty($_POST))) {
    $color = 'green';
} elseif (!empty($_POST)) {
    $color = 'yellow';
    header('Location: http://localhost/barsukas/08_ND/07.php');
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Septinta užduotis</title>
</head>

<body style="background-color: <?=$color?>; ">
    <h1 style="color: red">Septinta užduotis</h1>

    <form action="http://localhost/barsukas/08_ND/07.php" method="get">
    <button type="submit" name="get">Žalias GET</button>
    </form>
    <form action="http://localhost/barsukas/08_ND/07.php" method="post">
    <button type="submit" name="post">Geltonas POST</button> // kodel neatsiranda spalva?
    </form>

</body>
</html>