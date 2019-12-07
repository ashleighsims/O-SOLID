<?php

namespace App\OpenClosedPrincipleViolation;

class Checkout {
    public function process($basket) {
        // Process the contents of the basket...
        $this->makeCashPayment();
    }

    public function makeCashPayment() {
        // Process logic for making a cash payment...
        return "Cash payment made...";
    }
}
