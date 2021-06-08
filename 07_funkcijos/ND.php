<?php

echo '1 užduotis'; echo '<br>';
// 1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

function tekstas($k) {
    echo "<h1> $k </h1>";
}
tekstas('Labas!');

echo '<br><hr>'; echo '<br>';


echo '2 užduotis'; echo '<br>';
// 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, 
// o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

function tekstas2($k1, $num) {
    echo "<h$num> $k1 </h$num>";
}
$num = rand(1, 6);
echo "Numeris: $num";
tekstas2('Labas, pasauli', $num);

echo '<br><hr>'; echo '<br>';


echo '3 užduotis'; echo '<br>';
// 3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe 
// įdėkite į h1 tagą. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro 
// prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback();

$string = md5(time());
echo $string; echo '<br>';


// NEBAIGIAU

echo '<br><hr>'; echo '<br>';


echo '4 užduotis'; echo '<br>';
// 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos 
// (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

function sveikasSkaicius($sk) {
    if ($sk == intval($sk)) {
        $kiekis = 0;
        for ($i = 2; $i < $sk; $i++) {
            if ($sk % $i == 0) {
                $kiekis++;
            }
        }
        return $kiekis;
    } elseif ($sk != intval($sk)) {
        return;
    }
}
echo sveikasSkaicius(11);

echo '<br><hr>'; echo '<br>';


echo '5 užduotis'; echo '<br>';
// 5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. 
// Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.

for ($i=0; $i < 100 ; $i++) { 
    $m[$i] = rand(33, 77);
}

foreach ($m as $key => $value) {
    echo "$key => $value <br>";
}

foreach ($m as $key => $value) {
    $m[$key] = sveikasSkaicius($m[$value]);
}

print_r($m);
echo '<br><hr>'; echo '<br>';