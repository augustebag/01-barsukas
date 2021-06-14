    <?php
    $letters = range('A', 'J');
    $count = rand(3, 10);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $color = 'white';
        $form = false;
    } else {
        $color = 'black';
        $form = true;
    }

    _d($letters);
    _d($_POST); // $_POST['let'] == ['D', 'F']
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devinta - dešimta užduotys</title>
</head>
<body style="background-color: <?=$color?>">
<h1 style="color: pink"> Devinta - dešimta užduotys</h1>

<a href="">BACK</a><br>

    <?php if($form) : ?>
        <form action="" method="post" style="color: white">
        <input type="hidden" name="count" value="<?=$count?>"> 
        <?php foreach($letters as $letter) : ?>
        <label><?=$letter?></label>
        <input type="checkbox" name="let[]" value="<?=$letter?>">
        <?php if(--$count === 0) break ?>
        <?php endforeach ?>
        <button type="submit">CAL</button>
        </form>
    <?php else : ?>
        Sugeneruota: <?= $_POST['count']?><br>
        Pažymėta: <?= count($_POST['let'] ?? [])?><br>
    <?php endif ?>
    
</body>
</html>