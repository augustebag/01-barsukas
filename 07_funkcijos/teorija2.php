<?php

function recursive($num){
    echo $num, '<br>';
    if($num < 5) {
        //Kviečiame save. Padidiname numerį vienetu.
        return recursive($num + 1); // nuo 1 iki 5
    }
    echo 'Iseiname', $num, '<br>'; // nuo 5 iki 1
}
$startNum = 1;
recursive($startNum);

//// CALLBACK

$masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];

function doSort($a, $b) {
    return $a[0] <=> $b[0];
}

$doS = function($a, $b) {
    return $a[0] <=> $b[0];
}



usort($masyvas, function($a, $b){  // 1 budas kaip rasyti callback
    return $a[0] <=> $b[0];
});

usort($masyvas, 'doSort');      // 2 budas kaip rasyti callback

usort($masyvas, $doS);     // 3 budas kaip rasyti callback
