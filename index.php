<?php

require 'vendor/autoload.php';

use App\OpenClosedPrinciple\ExampleTwo\Ostrich;
use App\OpenClosedPrinciple\ExampleTwo\Duck;

echo "Open-Closed Principle";

// Example Two

// An Ostrich can only walk, it can't fly.
$ostrich = new Ostrich();
echo $ostrich->getName();
echo $ostrich->walk();

// A duck can walk and fly.
$duck = new Duck();
echo $duck->getName();
echo $duck->walk();
echo $duck->fly();
