<?php

namespace App\OpenClosedPrinciple\ExampleTwo;

class Duck extends FlyingBird
{
    // This class inherits the methods within the parent FlyingBird class
    // which in turn inherits from the Bird class you don't have to declare them
    // unless you wish to override the methods.

    public function __construct()
    {
        parent::__construct("Duck");
    }
}
