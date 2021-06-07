<?php

// 1 uzduotis
echo '1 uzduotis'; echo '<br>';
// Sugeneruokite masyvą iš 10 elementų, kurio elementai 
// būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
$masyvas = [];
foreach (range(1, 10) as $masyvas1 => $_) {
    foreach (range(1, 5) as $masyvas2 => $_) {
        $masyvas[$masyvas1][$masyvas2] = rand(5, 25);
    }
}
print_r($masyvas); 

echo '<br><hr>'; echo '<br>';

// 2 uzduotis
echo '2 uzduotis'; echo '<br>';
// a. Suskaičiuokite kiek masyve yra elementų didesnių už 10;

$daugiau10 = 0;
foreach ($masyvas as $masyvas1) {
    foreach ($masyvas1 as $masyvas2) {
        if ($masyvas2 > 10) {
            $daugiau10++;
        }
    }
}
echo "Didesnių skaičių už 10: $daugiau10";


echo '<br><hr>'; echo '<br>';
