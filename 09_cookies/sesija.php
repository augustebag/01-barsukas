<?php

session_start();

$max = 'AX';
$_SESSION['aiksas'] = $mas;
$_SESSION['aaa'] = range('A', 'Z');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesija</title>
</head>
<body>
    <?= $_SESSION['aiksas'] ?>
</body>
</html>