<?php

$labas = 'Labas';

function vardas($par1, $par2) { //par - parametrai
   
    global $labas, $viso;   // Nekoks budas
    echo $GLOBALS['labas']; // Nenaudotina
    echo $labas;            // Funkcijos viduje nerasome
    $viso = 'Viso gero';
    $sumav = $par1 + $par2;
    return $sumav;
}

$suma = vardas(8, 25); // funkcija yra iskvieciama, pasakant jos varda 
echo $suma; echo '<br>';

$suma = vardas(14, 66); 
echo $suma; echo '<br>';

$suma = vardas(48, 235); 
echo $suma; echo '<br>';

// ...

function calc($action,...$arg) {
    _d($arg);
    $answ = 0;
    foreach($arg as $val) {
        if ($action == '+') {
            $answ += $val;
        } elseif ($action == '-') {
            $answ += $val;
        }
    }
    return $answ;
}
_d(calc('+', 1, 5, 8));

///////

function stepper() {
    static $x = 0; // jei nebutu static, visi ats butu 1, kadangi yra static, ats yra 1, 2, 3, 4
    _d(__FUNCTION__); // consoleje parodo, kur iskvieciame funkcija 
    return ++$x;
}
_d(stepper());
_d(stepper());
_d(stepper());
_d(stepper());