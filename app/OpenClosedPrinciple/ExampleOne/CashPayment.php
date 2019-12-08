<?php

namespace App\OpenClosedPrinciple\ExampleOne;

use App\OpenClosedPrinciple\ExampleOne\Interfaces\PaymentMethodInterface;

class CashPayment implements PaymentMethodInterface {
    public function makePayment()
    {
        return "Cash payment made...";
    }
}
