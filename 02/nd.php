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

$sk1 = rand(0, 2);
$sk2 = rand(0, 2);
$sk3 = rand(0, 2);
$sk4 = rand(0, 2);

echo "Pirmas skaičius = $sk1";
echo '<br>';
echo "Antras skaičius = $sk2";
echo '<br>';
echo "Trečias skaičius = $sk3";
echo '<br>';
echo "Ketvirtas skaičius = $sk4";
echo '<br>';

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 6 uzdavinys

$sk = rand(1, 6);
echo "<h$sk>$sk</$sk>";

echo '<br>'; echo '<br><hr>'; echo '<br>';

// 7 uzdavinys

$s1 = rand(-10, 10);
$s2 = rand(-10, 10);
$s3 = rand(-10, 10);

echo "Pirmas skaičius = $s1";
echo '<br>';
echo "Antras skaičius = $s2";
echo '<br>';
echo "Trečias skaičius = $s3";
echo '<br>';

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