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
echo $string;

function numbers($skaiciai) {
    return "<h1>" . $skaiciai . "</h1>";
}
// NEBAIGIAU

echo '<br><hr>'; echo '<br>';


echo '4 užduotis'; echo '<br>';
// 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos 
// (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;