<?php

require __DIR__ . './Kibiras.php';

$kibirasA = new Kibiras1;
$kibirasB = new Kibiras1;

 _d($kibiras->kiekPririnktaAkmenu(), 'A');
 _d($kibiras->kiekPririnktaAkmenu(), 'B');
 _d($kibiras::kiekVisoPririnktaAkmenu(), 'VISO');

 $kibirasA->prideti1Akmeni();
 $kibirasA->prideti1Akmeni();
 $kibirasB->prideti1Akmeni();
 $kibirasB->prideti1Akmeni(10);
 $kibirasA->prideti1Akmeni(8);

 _d($kibiras->kiekPririnktaAkmenu(), 'A');
 _d($kibiras->kiekPririnktaAkmenu(), 'B');