<?php

require __DIR__ . '/Planas.php';
require __DIR__ . '/Stogas.php';
require __DIR__ . '/Antras.php';
require __DIR__ . '/Pirmas.php';

$namas = new Pirmas;

echo $namas->dopirmas(); echo '<br>';
echo $namas->doantras(); echo '<br>';
echo $namas->dostogas(); echo '<br>';