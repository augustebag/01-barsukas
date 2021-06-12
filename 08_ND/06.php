<?php

if((!empty($_GET)) && (empty($_POST))) {
    $color = 'yellow';
} elseif (!empty($_POST)) {
    $color = 'green';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Šešta užduotis</title>
</head>

<body style="background-color: <?=$color?>; ">
    <h1 style="color: red">Šešta užduotis</h1>

    <form action="" method="get">
    <button type="submit" name="GET">Geltona</button>
    </form>
    <form action="" method="post">
    <button type="submit" name="POST">Žalia</button>
    </form>

</body>
</html>