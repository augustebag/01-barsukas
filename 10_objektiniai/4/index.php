<?php

// $k1 = new Kibiras1();
// $k2 = new Kibiras2();
$Kibiras3 = new Kibiras3();
// $k1-> pridetiDaugAkmenu(2);
// $k2-> pridetiDaugAkmenu(22);
$Kibiras3-> pridetiDaugAkmenu(30);

$k1->kiekPririnktaAkm();
echo '<br><hr>'; echo '<br>';
$k2->kiekPririnktaAkm();
echo '<br><hr>'; echo '<br>';
$k3->kiekPririnktaAkm();
echo '<br><hr>'; echo '<br>';

echo $k3->getAkmenuKiekisVisuoseKibiruose();
