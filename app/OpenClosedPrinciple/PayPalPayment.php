<?php

namespace App\OpenClosedPrinciple;

use App\OpenClosedPrinciple\Interfaces\PaymentMethodInterface;

class PayPalPayment implements PaymentMethodInterface {
    public function makePayment()
    {
        return "PayPal payment made...";
    }
}
