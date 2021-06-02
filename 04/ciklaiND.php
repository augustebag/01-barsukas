<?php

// 1 uzduotis

echo '1 uzduotis';
echo '<br>';

$n=50;
echo "<div style='overflow-wrap: break-word;'>";
for ($i = 1 ; $i <= 400 ; $i++)
{
    echo '*';
    if($i==$n)
    {
        echo '<br>';
        $n+=50;
    }
}
echo '</div>';
echo '<br><hr>'; echo '<br>';

// 2 uzduotis

echo '2 uzduotis';
echo '<br>';

$daugiau150 = 0;
for ($i = 0; $i < 300; $i++) {
    $sk = rand(0, 300) . ' ';
    if ($sk > 150) {
    $daugiau150++;
}
    if ($sk > 275) {
    echo "<span style='color:red;'>$sk</span>";
    } else {
    echo $sk;
    }
}

echo '<br><hr>'; echo '<br>';

// 3 uzduotis

echo '3 uzduotis';
echo '<br>';

$sk = rand(3000, 4000);
$daliklis = 77;
for ($i = $daliklis + 1; $i < $sk; $i++) {
    if ($i % $daliklis === 0) {
        echo $daliklis . ', ' . $i;
    }
}
echo $daliklis;

echo '<br><hr>'; echo '<br>';

// 4 uzduotis

