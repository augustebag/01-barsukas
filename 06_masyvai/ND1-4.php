<?php

// 1 uzduotis
echo '1 uzduotis'; echo '<br>';
// Sugeneruokite masyvą iš 10 elementų, kurio elementai 
// būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
$masyvas = [];
foreach (range(1, 10) as $masyvas1 => $val1) {
    foreach (range(1, 5) as $masyvas2 => $val2) {
        $masyvas[$masyvas1][$masyvas2] = rand(5, 25);
    }
}
print_r($masyvas); 

echo '<br><hr>'; echo '<br>';

// 2 uzduotis
echo '2 uzduotis'; echo '<br>';
// a. Suskaičiuokite kiek masyve yra elementų didesnių už 10;

$daugiau10 = 0;
foreach ($masyvas as $val1) {
    foreach ($val1 as $val2) {
        if ($val2 > 10) {
            $daugiau10++;
        }
    }
}
echo "Didesnių reikšmių už 10: $daugiau10";
echo '<br><hr>'; echo '<br>';

// b.Raskite didžiausio elemento reikšmę;

$didziausiasElementas = 0;
foreach ($masyvas as $masyvas1) {
    foreach ($masyvas1 as $masyvas2) {
        if ($val2 > $didziausiasElementas) {
            $didziausiasElementas = $masyvas2;
        }
    }
}

echo "Didžiausias elementas yra: $didziausiasElementas";
echo '<br><hr>'; echo '<br>';

// c. Suskaičiuokite kiekvieno antro lygio masyvų su vienodais 
// indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

/* DESTYTOJO VARIANTAS
$sums = [];

foreach ($masyvas as $masyvas1 => $val1) {
    foreach ($masyvas1 as $masyvas2 => $val2) {
        $sums[$masyvas2] = ($sums[$masyvas2] ?? 0) + $val2;
    }
}

print_r($sums);
*/

echo '<br><hr>'; echo '<br>';

// d. Visus masyvus “pailginkite” iki 7 elementų

foreach ($masyvas as $masyvas2 => &$value) {
    $value[] =  rand(5, 25);
    $value[] =  rand(5, 25);
}
print_r($value);
echo '<br><hr>'; echo '<br>';

// e. Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir 
// sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo 
// reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
$masyvoSuma = [];
foreach($masyvas as $masyvas2) {
     $masyvoSuma[] = array_sum($masyvas2);
}
print_r($masyvoSuma);
echo '<br><hr>'; echo '<br>';

// 3 uzduotis
echo '3 uzduotis'; echo '<br>';
// Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su 
// atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos 
// raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

$masyvas = [];
$abc = range('A', 'Z');
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, rand(2, 20)) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] =$abc[rand(0, 25)];
    }
}
print_r($masyvas); 
echo '3 uzduotis'; echo '<br>';

// 4 uzduotis
echo '4 uzduotis'; echo '<br>';
// RUSIAVIMAS

_d($masyvas);
usort($masyvas, function($a, $b) {
    $ak =  (int)in_array('K', $a);
    $bk =  (int)in_array('K', $a);

    if ($ak + $ bk == 1) {
        return $ak <=> $bk;
    }

    return count($a) <=> count($b);
});

_d($masyvas);