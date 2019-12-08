<?php

namespace App\OpenClosedPrinciple\ExampleTwo;

class FlyingBird extends Bird
{
    // This class inherits the methods within the parent Bird class
    // so you don't have to declare them unless you override the methods.
    public function fly()
    {
        return "Fly!";
    }
}
