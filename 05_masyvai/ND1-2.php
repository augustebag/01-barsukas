<?php

// 1 uzduotis
//Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
//kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
echo '1 uzduotis'; echo '<br>';

$masyvas = [];
foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}
_d($masyvas, 'mano masyvas');

echo '<br><hr>'; echo '<br>';


//2 uzduotis
//Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
echo '2 uzduotis'; echo '<br>';

$daugiau10 = 0;
foreach ($masyvas as $value) {
    if ($value > 10) {
        $daugiau10++;
    }
}
echo $daugiau10 . ' didesnės reikšmės už 10.';
echo '<br><hr>'; echo '<br>';

//Raskite didžiausią masyvo reikšmę ir jos indeksą;

$max = 5;
$index = [];
foreach($masyvas as $key) => $val) {
    if ($val > $max) {
        $max = $val;
        $index = [];
    }
    if ($val == $max) {
        $index[] = $key;
    }
}
_d($max, 'max');
_d($index, 'indexes');

echo '<br><hr>'; echo '<br>';

//Suskaičiuokite visų porinių indeksų reikšmių sumą;

$poriniuIndeksuSum = 0;
for ($i = 2; $i < $masyvoDydis; $i += 2) {
    $poriniuIndeksuSum += $masyvas[$i];
}
echo "Porinių indeksų reikšmių suma: $poriniuIndeksuSum";
echo '<br><hr>'; echo '<br>';


//Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
$poriniu_suma = 0;

foreach($masyvas as $i => $value) {
    if($i % 2 === 0) {
    $poriniu_suma += $value;
    }
}
echo 'Poriniu indeksu reiksmiu suma: '.$poriniu_suma;
echo '<br><hr>'; echo '<br>';

//Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

$index[] = $key;
array_push($index, $key);
echo '<br><hr>'; echo '<br>';

//Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
for($i = 0; $i < 10; $i++){
    $naujas_m[]= rand(5,25); 
    }
echo '<br><hr>'; echo '<br>';
//Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
foreach ($masyvas3 as $key => &$value) {
    if($value > 15) {
        $value = 0;
    }
}
unset($value);
echo '<br><hr>'; echo '<br>';
//Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;

reset($masyvas);
$ind10 = false;
do {
    $ind10 = key($masyvas);
    $val = current($masyvas);
    next($masyvas);
} while(key($masyvas)!==null && $val < 10);

//Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
echo '<br><hr>'; echo '<br>';

