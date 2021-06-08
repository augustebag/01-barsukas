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

/*
KITAS VARIANTAS
for ($i=1; $i < 401 ; $i++) { 
    echo '*';
    if($i % 50 == 0) {
        echo '<br>';
    } 
}
*/

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

echo '4 uzduotis';
echo '<br>';

echo "<div style = 'line-height: 70%;'>";

for ($i = 0; $i < 25; $i++) {
    for ($j = 0; $j < 25; $j++) {
        echo '* ';
    }
   echo "</br>";
}
'</div>';

echo '<br><hr>'; echo '<br>';


// 5 uzduotis

echo '5 uzduotis';
echo '<br>';

<style>

  .kvadratas {

    white-space: nowrap;
  }
  .kvadratas span{

    padding: 3px;
  }
</style>
<?php

echo "<div class='kvadratas' id='kvadratas'>";
for ($i = 0 ; $i < $krastine ; $i++) {
    for ($j = 0 ; $j < $krastine ; $j++) {
        if($i==$j){
            echo '<span class="red">* </span>';
        }
        elseif($i+$j == $krastine-1){
            echo '<span class="red">* </span>';
        }
        else {
         echo '<span>* </span>';
        }
    }
    echo '<br>';
}

echo '</div>';
echo '<hr>';

// 6 uzduotis

echo '6 uzduotis';
echo '<br>';

$h = 0;

do {
    $coin = rand(0, 1);
    if ($coin === 1) {
        echo 'S';
        $h = 0;
    } else {
        echo 'H';
        $h++;
    }
} while ($h < 3);

echo '<br><hr>'; echo '<br>';

// 7 uzduotis

echo '7 uzduotis';
echo '<br>';

$winner = 222;
$leader = 0;
$petras = 0;
$kazys = 0;

do {
    $petras += rand(10,20);
    if($petras > $leader) {
        $leader = $petras;
    }
    $kazys += rand(5,25);
    if($kazys > $leader) {
        $leader = $kazys;
    }   
    echo "Petro taskai: $petras, Kazio taskai: $kazys. Partija laimejo: " . ($petras > $kazys ? 'Petras.' : ($petras == $kazys ? 'Lygiosios.' : 'Kazys.'));

    echo '<br>';
} while ($leader < $winner);

echo '<br><hr>'; echo '<br>';

// 8 uzduotis

echo '8 uzduotis';
echo '<br>';
$dHorizontalOfRhombus = 101;
$dVerticalOfRhombus = 30;
$diagRatio = $dVerticalOfRhombus / $dHorizontalOfRhombus;
echo '<div style="text-align:center;">';
for ($ii = 0; $ii < $dVerticalOfRhombus; $ii++) {
    for ($i = 0; $i < $dHorizontalOfRhombus; $i++) {
        if ($ii >= $diagRatio  * $i + 1 && $ii <= $diagRatio  * ($dHorizontalOfRhombus - $i) - 1) {
            echo '<span style="line-height: 3px; font-size: 16px; color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');">*</span>';
        }
    }
    echo '<span style="font-size: 1px;"><br></span>';
}
echo '</div><br>';
echo '<br><hr>'; echo '<br>';

// 10 uzduotis

echo '10 uzduotis';
echo '<br>';

$nail_length = 8.5;
// 5 nails with small strikes:
$strikes = 0;
for ($i = 0; $i < 5; $i++) {
    $progress = 0;
    while ($progress < $nail_length) {
        $small_strike = rand(5, 20);
        $progress += $small_strike;
        $strikes++;
    }
}
echo "Fully hammering 5 nails with small strikes took $strikes strikes. <br>";
// 5 nails with small strikes:
$strikes = 0;
for ($i = 0; $i < 5; $i++) {
    $progress = 0;
    while ($progress < $nail_length) { 
        $big_strike = rand(20, 30);
        if (rand(0, 1) == 1) {
            $progress += $small_strike;
        }
        $strikes++;
    }
}
echo "Fully hammering 5 nails with big strikes took $strikes strikes. <br>";