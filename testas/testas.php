<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testas</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" name=""><br><br>
    <input type="text" name=""><br><br>
    <input type="text" name=""><br><br>
    <button type="submit">GO</button>
    <button type="reset">RESET</button>
    </form>

    <?php
    if (!empty($_GET)) {
        $m = [];
        if (is_numeric($_GET['_0']))  {
            $m[] = $_GET['_0'];
        } 
        if (is_numeric($_GET['_1']))  {
            $m[] = $_GET['_1'];
        } 
        if (is_numeric($_GET['_2']))  {
            $m[] = $_GET['_2'];
        }   
    }

    rsort($m);
    echo '<pre>';
    print_r($m);
    echo '</pre>';
    
</body>
</html>