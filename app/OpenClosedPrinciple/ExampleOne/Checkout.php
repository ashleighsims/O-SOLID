<?php

namespace App\OpenClosedPrinciple\ExampleOne;

use App\OpenClosedPrinciple\ExampleOne\Interfaces\PaymentMethodInterface;

class Checkout {
    public function process($basket, PaymentMethodInterface $paymentMethod) {
        // Process the contents of the basket...

        // As we are using an interface a class must implement that method therefore we know
        // makePayment() will always be available to call.
        //
        // This way we can introduce more payment methods without needing to change the
        // checkout process method.
        $paymentMethod->makePayment();
    }
}
