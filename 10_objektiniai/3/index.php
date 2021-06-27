<?php

require __DIR__ . '/Kibiras2.php';

$k1 = new Kibiras2();
$k2 = new Kibiras2();
$k3 = new Kibiras2();
$k1-> pridetiDaugAkmenu(2);
$k2-> pridetiDaugAkmenu(22);
$k3-> pridetiDaugAkmenu(30);

$k1->kiekPririnktaAkm();
echo '<br><hr>'; echo '<br>';
$k2->kiekPririnktaAkm();
echo '<br><hr>'; echo '<br>';
$k3->kiekPririnktaAkm();
echo '<br><hr>'; echo '<br>';

echo $k3->getAkmenuKiekisVisuoseKibiruose();
