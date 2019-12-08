<?php

namespace App\OpenClosedPrinciple\ExampleTwo;

class Ostrich extends Bird
{
    // This class inherits the methods from the Bird class
    // you don't have to declare the methods unless you wish to override the methods.

    public function __construct()
    {
        parent::__construct("Ostrich");
    }
}
