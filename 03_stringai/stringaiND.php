<?php

////////////////////////

echo '1 uzduotis';
echo '<br>';

$vardas = 'Ryan';
$pavarde = 'Reynolds';

echo "Aktoriaus vardas yra $vardas.";
echo '<br>';
echo "Aktoriaus pavardė yra $pavarde.";
echo '<br>';

if(strlen($vardas) < strlen($pavarde)) {
    echo "Trumpesnis yra: $vardas";
} else if (strlen($vardas) < strlen($pavarde)) {
    echo "Trumpesnis yra: $pavarde";
}

echo '<br>'; echo '<br><hr>'; echo '<br>';

///////////////////////

echo '2 uzduotis';
echo '<br>';

$vardas = 'Ryan';
$pavarde = 'Reynolds';

echo "Aktoriaus vardas yra $vardas.";
echo '<br>';
echo "Aktoriaus pavardė yra $pavarde.";
echo '<br>';

echo strtoupper($vardas);
echo '<br>';
echo strtolower($pavarde);

echo '<br>'; echo '<br><hr>'; echo '<br>';

///////////////////////

echo '3 uzduotis';
echo '<br>';

$vardas = 'Ryan';
$pavarde = 'Reynolds';

echo "Aktoriaus vardas yra $vardas.";
echo '<br>';
echo "Aktoriaus pavardė yra $pavarde.";
echo '<br>';

$inicialai = $vardas[0] . '.' . ' ' . $pavarde[0] . '.';
echo "Aktoriaus inicialai yra $inicialai";

//// KITAS VARIANTAS
//$name = 'Keanu';
//$lastname = 'Reeves';
//$nameFirstLetter = substr($name,0,1);
//$lastnameFirstLetter = substr($lastname, 0,1);
//$newString = $nameFirstLetter . $lastnameFirstLetter;
//echo $newString;
echo '<br>'; echo '<br><hr>'; echo '<br>';

///////////////////////

echo '4 uzduotis';
echo '<br>';

$vardas = 'Ryan';
$pavarde = 'Reynolds';

echo "Aktoriaus vardas yra $vardas.";
echo '<br>';
echo "Aktoriaus pavardė yra $pavarde.";
echo '<br>';

$paskutineR = substr($vardas, -3) . ' ' . substr($pavarde, -3);
echo "Paskutinės trys raidės: $paskutineR";

echo '<br>'; echo '<br><hr>'; echo '<br>';

///////////////////////

echo '5 uzduotis';
echo '<br>';

$k = 'An American in Paris';
echo $k;
echo '<br>';

$keitimasIs = ['A', 'a'];
$keitimasI = '*';

echo 'Keitimas: ' . (str_ireplace($keitimasIs, $keitimasI, $k));

echo '<br>'; echo '<br><hr>'; echo '<br>';

///////////////////////

echo '6 uzduotis';
echo '<br>';

$k = 'An American in Paris';
echo $k;
echo '<br>';

$raides1 = substr_count($k, 'A');
$raides2 = substr_count($k, 'a');

echo 'Iš viso: ' . ($raides1 + $raides2); 

echo '<br>'; echo '<br><hr>'; echo '<br>';

///////////////////////

echo '7 uzduotis';
echo '<br>';

$filmas = 'An American in Paris';
$filmas2 =  'Breakfast at Tiffanys';
$filmas3 = '2001: A Space Odyssey';
$filmas4 = 'Its a Wonderful Life';

echo $filmas;
echo '<br>';
echo $filmas2;
echo '<br>';
echo $filmas3;
echo '<br>';
echo $filmas4;
echo '<br>';

$balses = array('a', 'e', 'o', 'i', 'y', 'u', 'A', 'E', 'O', 'I', 'Y');
$priebalses = str_replace($balses, ' ', $filmas);
echo "Primas filmas: " . $priebalses;
echo '<br>';

$priebalses = str_replace($balses, ' ', $filmas2);
echo "Antras filmas: " . $priebalses;
echo '<br>';

$priebalses = str_replace($balses, ' ', $filmas3);
echo "Trecias filmas: " . $priebalses;
echo '<br>';

$priebalses = str_replace($balses, ' ', $filmas4);
echo "Ketvirtas filmas: " . $priebalses;
echo '<br>';

echo '<br>'; echo '<br><hr>'; echo '<br>';

///////////////////////

echo '8 uzduotis';
echo '<br>';

$starwars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo preg_replace('/\D/', '', $starwars);
echo '<br>'; echo '<br><hr>'; echo '<br>';

///////////////////////

echo '9 uzduotis';
echo '<br>';

$string2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale.';

echo $string2;
echo '<br>'; echo '<br>';


$words = explode(' ', $string2);
$counter = 0;

for($i = 0; $i < count($words); $i++) {
    if (mb_strlen($words[$i], 'UTF-8') <= 5){
        $counter++;
    }
}

echo "Žodžių, trumpenių arba lygių nei 5 raidės skaičius: $counter";

echo '<br>'; echo '<br><hr>'; echo '<br>';

///////////////////////

echo '10 uzduotis';
echo '<br>';

$abc = 'abcdefghijklmnopqrstuvwxyz';
echo $abc;
echo '<br>';

$sk1 = $abc[rand(0, 25)];
$sk2 = $abc[rand(0, 25)];
$sk3 = $abc[rand(0, 25)];

$trysRaid = $sk1 . $sk2 . $sk3;
echo $trysRaid;