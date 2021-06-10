<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voverės ir Zuikiai</title>
</head>
<body>
<h1>Voverės ir Zuikiai</h1>
<h2>
<a href="?rodyti=vovere&puslapis=1">Voverės 1</a>
<a href="?rodyti=vovere&puslapis=2">Voverės 2</a>
<a href="?rodyti=vovere&puslapis=1">Zuikiai 1</a>
<a href="?rodyti=vovere&puslapis=2">Zuikiai 2</a>
</h2>
<?php

_d($_GET);
_d($_SERVER['REQUEST_METHOD'], 'metodas ->');

if (isser($_GET['rodyti'])) {
    if ($_GET['rodyti'] == 'vovere') {
    echo 'Rodom voveres', ' Puslapis: ' . ($_GET['puslapis'] ?? 1);
    } elseif ($_GET['rodyti'] == 'zuikis') {
    echo 'Rodom zuikius', ' Puslapis: ' . ($_GET['puslapis'] ?? 2);
    } else {
    echo 'Tokio neturime!';
    } else {
        'Sveiki atvyke!';
    }
}

?>

<form action="http://localhost/08_webMechanika/" method="get">
Ka rodyti: <input type="text" name="rodyti">
Puslapis: <input type="text" name="puslapis">
<button type="submit">ziureti</button>
</body>
</html>