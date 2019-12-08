<?php

namespace App\OpenClosedPrinciple\ExampleOne;

use App\OpenClosedPrinciple\ExampleOne\Interfaces\PaymentMethodInterface;

class StripePayment implements PaymentMethodInterface {
    public function makePayment()
    {
        return "Stripe payment made...";
    }
}
