<?php

// 1 uzdavinys

$vardas = 'Augustė';
$pavarde = 'Bagdzevičiūtė';
$gimimoMetai = 1994;
$einamiejiMetai = 2021;

$metai = $einamiejiMetai - $gimimoMetai;

echo "Aš esu $vardas $pavarde. Man yra $metai.";

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 2 uzdavinys

$pirmas = rand(0, 4);
$antras = rand(0, 4);

echo "Pirmas kintamasis = $pirmas.";
echo '<br>';
echo "Antras kintamasis = $antras.";
echo '<br>';

if ($pirmas == 0 || $antras == 0) {
    echo 'Dalyba iš 0 negalima! :(';
    } else if ($pirmas > $antras) {
        $rezultatas = $pirmas / $antras;
        echo round($rezultatas, 2);
    } else if ($pirmas < $antras) {
        $rezultatas = $antras / $pirmas;
        echo round($rezultatas, 2);
    } else if ($pirmas == $antras) {
        echo 'Lygūs skaičiai!';
    }

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 3 uzdavinys

$pirmasSk = rand(0, 25);
$antrasSk = rand(0, 25);
$treciasSk = rand(0, 25);

echo "Pirmas kintamasis = $pirmasSk.";
echo '<br>';
echo "Antras kintamasis = $antrasSk.";
echo '<br>';
echo "Trečias kintamasis = $treciasSk.";
echo '<br>';

if ($pirmasSk >= $antrasSk && $pirmasSk <= $treciasSk || $pirmasSk <= $antrasSk && $pirmasSk >= $treciasSk) {
    echo "Vidurinis skaičius yra $pirmasSk";
} else if ($antrasSk >= $pirmasSk && $antrasSk <= $treciasSk || $antrasSk <= $pirmasSk && $antrasSk >= $treciasSk) {
    echo "Vidurinis skaičius yra $antrasSk";
} else if ($treciasSk >= $antrasSk && $treciasSk <= $pirmasSk || $treciasSk <= $antrasSk && $treciasSk >= $pirmasSk) {
    echo"Vidurinis skaičius yra $treciasSk";
}

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 4 uzdavinys

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "Pirmas skaičius = $a";
echo '<br>';
echo "Antras skaičius = $b";
echo '<br>';
echo "Trečias skaičius = $c";
echo '<br>';

if ($a + $b > $c || $b + $c > $a || $c + $a > $b) {
    echo 'Galime sudaryti trikampį';
} else {
    echo 'Negalime sudaryti trikampio';
}

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 5 uzdavinys

$pirmas = rand(0, 2);
$antras = rand(0, 2);
$trecias = rand(0, 2);
$ketvirtas = rand(0, 2);

echo "$pirmas, $antras, $trecias, $ketvirtas";
echo '<br>'; echo '<br>';

$counter0 = 0;
$counter1 = 0;
$counter2 = 0;

($pirmas === 0) ? $counter0++ : ( ($pirmas === 1) ? $counter1++ : $counter2++ );
($antras === 0) ? $counter0++ : ( ($antras === 1) ? $counter1++ : $counter2++ );
($trecias === 0) ? $counter0++ : ( ($trecias === 1) ? $counter1++ : $counter2++ );
($ketvirtas === 0) ? $counter0++ : ( ($ketvirtas === 1) ? $counter1++ : $counter2++ );

echo "nulių yra - $counter0; vienetų yra - $counter1; dvejetų yra - $counter2";

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 6 uzdavinys

$sk = rand(1, 6);
echo "<h$sk>$sk</$sk>";

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 7 uzdavinys

$pirmas = rand(-10,10);
$antras = rand(-10,10);
$trecias = rand(-10,10);

$spalva1 = $pirmas < 0 ? 'green' : ($pirmas > 0 ? 'blue' : 'red');
$spalva2 = $antras < 0 ? 'green' : ($antras > 0 ? 'blue' : 'red');
$spalva3 = $trecias < 0 ? 'green' : ($trecias > 0 ? 'blue' : 'red');

echo "Pirmas skaicius: <font style='color: $spalva1; font-size: 25px; font-weight: bold'>$pirmas </font>";
echo "Antras skaicius: <font style='color: $spalva2; font-size: 25px; font-weight: bold'>$antras </font>";
echo "Trecias skaicius: <font style='color: $spalva3; font-size: 25px; font-weight: bold'>$trecias </font>";

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 8 uzdavinys

$zvakiuKiekis = rand(5, 3000);

if ($zvakiuKiekis<1000){
    echo "kiekis: $zvakiuKiekis, nuolaida = 0, kaina: $zvakiuKiekis";
}
if ($zvakiuKiekis>= 1000 && $zvakiuKiekis<2000) {
    echo 'kiekis: '. $zvakiuKiekis.' , nuolaida: '.$zvakiuKiekis * 0.03 . ' , kaina: '. $zvakiuKiekis - ($zvakiuKiekis * 0.03);
}
if ($zvakiuKiekis>= 2000) {
    echo 'kiekis: '. $zvakiuKiekis. ' , nuolaida: '.$zvakiuKiekis * 0.04 .' , kaina: '. $zvakiuKiekis - ($zvakiuKiekis * 0.04);
}

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 9 uzdavinys

$skaicius1 = rand(0, 100);
$skaicius2 = rand(0, 100);
$skaicius3 = rand(0, 100);

echo "Skaiciai: $skaicius1 - $skaicius2 - $skaicius3";
echo '<br>';
if ($skaicius1 < 90  && 10 < $skaicius1) {
    $sk1 = "$skaicius1";
  
}
else {
    $sk1 = 0;
   
};
if ($skaicius2 < 90  && 10 < $skaicius2) {
    $sk2 = "$skaicius2";
  
}
else {
    $sk2 = 0;
   
};
if ($skaicius3 < 90  && 10 < $skaicius3) {
    $sk3 = "$skaicius3";
  
}
else {
    $sk3 = 0;
   
};
$average = round(($sk1 + $sk2 + $sk3) / 3, 2);
echo "Vidurkis: $average";
echo '<br>';
echo '<br>';


echo '<br>'; echo '<br><hr>'; echo '<br>';

// 10 uzdavinys

$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);

$length = 2;

$hours = substr(str_repeat(0, $length).$hours, -$length);
$minutes = substr(str_repeat(0, $length).$minutes, -$length);
$seconds = substr(str_repeat(0, $length).$seconds, -$length);

echo "<h1>$hours : $minutes : $seconds</h1>";

$extraSeconds = rand(0, 300);

echo "Papildomos sekundės: $extraSeconds";
echo '<br>';

$totalTime = $seconds + $minutes * 60 + $hours * 3600 + $extraSeconds;

$seconds = $totalTime % 60;
$minutes = (($totalTime - $seconds) / 60) % 60 ;
$hours = (($totalTime - $seconds) / 60 - $minutes) / 60;

$hours = substr(str_repeat(0, $length).$hours, -$length);
$minutes = substr(str_repeat(0, $length).$minutes, -$length);
$seconds = substr(str_repeat(0, $length).$seconds, -$length);

echo "<h1>$hours : $minutes : $seconds</h1>";

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 11 uzdavinys

$var1 = rand(1000, 9999);
$var2 = rand(1000, 9999);
$var3 = rand(1000, 9999);
$var4 = rand(1000, 9999);
$var5 = rand(1000, 9999);
$var6 = rand(1000, 9999);

echo "Skaičius1 = $var1; Skaičius2 = $var2; Skaičius3 = $var3; Skaičius4 = $var4; Skaičius5 = $var5; Skaičius6 = $var6.<br>";
$string = strval($var1) . ' ' . strval($var2) . ' ' . strval($var3) . ' ' . strval($var4) . ' ' . strval($var5) . ' ' . strval($var6) . ' ';
$stringParts = str_split($string, 5);
rsort($stringParts);

echo 'String of descending variables: ' . implode($stringParts) . '<br><br>';