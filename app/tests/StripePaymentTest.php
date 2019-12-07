<?php

namespace App\Tests;

use App\OpenClosedPrinciple\StripePayment;
use PHPUnit\Framework\TestCase;

class StripePaymentTest extends TestCase
{
    public function testStripePaymentMakePayment()
    {
        $stripePayment = new StripePayment();
        $this->assertEquals('Stripe payment made...', $stripePayment->makePayment());
    }
}
