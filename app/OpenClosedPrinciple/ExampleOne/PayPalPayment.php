<?php

namespace App\OpenClosedPrinciple\ExampleOne;

use App\OpenClosedPrinciple\ExampleOne\Interfaces\PaymentMethodInterface;

class PayPalPayment implements PaymentMethodInterface {
    public function makePayment()
    {
        return "PayPal payment made...";
    }
}
