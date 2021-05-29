<?php

// aritmetika

$trecias = 5;
$ketvirtas = $trecias % 3;

echo $ketvirtas;
echo '<br>';

echo ++$trecias;
echo '<br>';
echo $trecias;
echo '<br>';

$sk = 1;
echo $sk++ + ++$sk;

$ketvirtas = $ketvirtas + 5;
$ketvirtas += 5;

echo '<br>';
echo $ketvirtas;
echo '<br>';

$pirmas = 'bla bla';
$antras = 'ku ku';
$trecias = $pirmas . ' ' .  $antras; // taskas yra stingu pridejimas

echo '<br>';
echo $trecias;