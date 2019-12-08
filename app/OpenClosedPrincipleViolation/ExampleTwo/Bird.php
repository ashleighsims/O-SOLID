<?php

namespace App\OpenClosedPrincipleViolation\ExampleTwo;

class Bird
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function walk()
    {
        return "Walk!";
    }

    // Picture this, we like that our bird can walk.
    // However we want it to be able to fly. We could just add the fly() method here right?
    // Wrong? This class is closed for modification. It is open for extension though. So maybe we could extend it?
    // Also as the Liskov Substitution Principle states you should be able to substitute a parent class with the child class.
    // If we added fly here we would break that principle as not all birds can fly...

}
