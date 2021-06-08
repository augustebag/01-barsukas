<?php

// 5 uzduotis
echo '5 užduotis'; echo '<br>';
// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas 
// yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis 
// unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

$masyvas = [];
$count = 0;

do {
    $count++;
    $uid = rand(1, 50);
    foreach ($masyvas as $user) {
        if ($user['user_id'] == $uid) {
            continue 2;
        }
    }
    $masyvas[] = [
        'user_id' => $uid,
        'place_in_row' => rand(0, 100)];
} while(count($masyvas) < 30);

_d($masyvas);
echo '<br><hr>'; echo '<br>';


// 6 uzduotis
echo '6 užduotis'; echo '<br>';
// Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
// Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

usort($masyvas, function($a, $b) {
    return $a <=> $b}); 

    _d($masyvas);  
    print_r($masyvas); 


    usort($masyvas, function($a, $b) {
    return $a['place_in_row'] <=> $b['place_in_row']});
    
    _d($masyvas);
    print_r($masyvas);

    echo '<br><hr>'; echo '<br>';


// 7 uzduotis
echo '7 užduotis'; echo '<br>';
// Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: 
// name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų 
// lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.


foreach ($masyvas as &$user) {
    $user['name'] = ' ';
    $user['surname'] = ' ';
    foreach(range(1, rand(5, 15)) as $_) {
        $user['name'] .= range('a', 'z')[rand(0, 25)];
    }
    foreach(range(1, rand(5, 15)) as $_) {
        $user['surname'] .= range('a', 'z')[rand(0, 25)];
    }
}

_d($masyvas);