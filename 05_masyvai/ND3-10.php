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

// 5 uzdavinys
echo '5 uzdavinys'; echo '<br>';
// Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
// Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
// Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.

$masyvas1 = [];
$masyvas2 = [];
$masyvas3 = [];

for ($i = 0; $i < 200; $i++) {
    $masyvas1 = rand(0, 3);
    $masyvas2 = rand(0, 3);
    $masyvas3 = rand(0, 3);

    $abc = ['A', 'B', 'C', 'D'];

    $raides1[$i] = $abc[$masyvas1];
    $raides2[$i] = $abc[$masyvas2];
    $raides3[$i] = $abc[$masyvas3];

    echo $raides1[$i] . ' ' . $raides2[$i] . ' ' . $raides3[$i]; echo '<br>';
} // UNIKALIOS REIKSMES? 
echo '<br><hr>'; echo '<br>';

// 6 uzduotis
echo '6 uzdavinys'; echo '<br>';
// Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. 
// Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
$pirmasMasyvas = [];
$antrasMasyvas = [];


echo '<br><hr>'; echo '<br>';
