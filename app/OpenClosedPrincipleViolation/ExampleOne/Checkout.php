<?php

namespace App\OpenClosedPrincipleViolation\ExampleOne;

class Checkout {
    public function process($basket) {
        // Process the contents of the basket...
        $this->makeCashPayment();
    }

    public function makeCashPayment() {
        // Process logic for making a cash payment...
        return "Cash payment made...";
    }

    // What if we wanted to process credit cards? We shouldn't add a method here to do that.
}
