<?php
// 3 uzduotis 
echo '3 uzduotis'; echo '<br>';
// Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės 
// A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

$a = 0;
$b = 0;
$c = 0;
$d = 0;

for ($i = 0; $i < 200; $i++) {
    $int = rand(0,3);
    $abc = ['A', 'B', 'C', 'D'];
    $raides[$i] = $abc[$int];
}

foreach ($raides as $key => $val) {
    if ($val == 'A') {
        $a++;
    } elseif ($val == 'B') {
        $b++;
    } elseif ($val == 'C') {
        $c++;
    } elseif ($val == 'D') {
        $d++;
    }
}

echo "A: $a, B: $b, C: $c, D: $d.";
echo '<br><hr>'; echo '<br>';

// 4 uzdavinys 
echo '4 uzduotis'; echo '<br>';
//Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.

sort($raides);
foreach($raides as $key => $val) {
    echo $val . ' ';
}

echo '<br><hr>'; echo '<br>';