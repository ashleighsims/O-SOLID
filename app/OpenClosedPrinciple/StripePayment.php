<?php

namespace App\OpenClosedPrinciple;

use App\OpenClosedPrinciple\Interfaces\PaymentMethodInterface;

class StripePayment implements PaymentMethodInterface {
    public function makePayment()
    {
        return "Stripe payment made...";
    }
}
