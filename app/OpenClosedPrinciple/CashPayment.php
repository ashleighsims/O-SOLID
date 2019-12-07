<?php

namespace App\OpenClosedPrinciple;

use App\OpenClosedPrinciple\Interfaces\PaymentMethodInterface;

class CashPayment implements PaymentMethodInterface {
    public function makePayment()
    {
        return "Cash payment made...";
    }
}
