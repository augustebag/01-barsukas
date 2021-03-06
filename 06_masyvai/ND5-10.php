<?php

// kolegu ir destytojo sprendimai

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

echo '<br><hr>'; echo '<br>';


// 8 uzduotis
echo '8 užduotis'; echo '<br>';
// Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: 
// generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė 
// yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. 
// Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

$masyvas = [];

foreach (range(1, 10) as $key1 => $_) {
    $sk = rand(0, 5);
    if ($sk == 0) {
        $masyvas[$key1] = rand(0, 10);
    } else {
        foreach (range(1, $sk) as $key2 => $_) {
            $masyvas[$key1][] = rand(0, 10); 
        }
    }
}

_d($masyvas);

echo '<br><hr>'; echo '<br>';


// 9 uzduotis
echo '9 užduotis'; echo '<br>';
// Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, 
// kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

usort($masyvas, function($a, $b) {
    $asum = 0;
    if(is_array($a)) {
        foreach($a as $value) {
            $asum += $value;
        }
        $a = $asum;
    }
    $bsum = 0; 
    if(is_array($b)) {
        foreach($b as $value) {
            $bsum += $value;
        }
        $b = $bsum;
    }
    return $a <=> $b;
}
);