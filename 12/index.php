<?php
namespace Zoo;
use Zoo\Animal as AnimalL;
use Australia\Animal as AnimalA;
use Belgium\Animal as AnimalB;

require __DIR__ . '/vendor/autoload.php';

// spl_autoload_register(function($class) {
//     echo "Nerandu klases: $class";
// });

// spl_autoload_register(function($class) {
//     echo "Nerandu klases: $class";
// });

// spl_autoload_register(function($class) {
//     echo "Nerandu klases: $class";
// });

require __DIR__ . '/australai/Animal.php';
require __DIR__ . '/belgai/Animal.php';
require __DIR__ . '/Animal.php';


echo AnimalL::sayUUID();  echo '<br>';
new AnimalL;
echo AnimalA::$go; echo '<br>';
new AnimalA;
echo AnimalB::$go; echo '<br>';
new AnimalB;
