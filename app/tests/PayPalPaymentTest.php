<?php

namespace App\Tests;

use App\OpenClosedPrinciple\PayPalPayment;
use PHPUnit\Framework\TestCase;

class PayPalPaymentTest extends TestCase
{
    public function testPayPalPaymentMakePayment()
    {
        $paypalPayment = new PayPalPayment();
        $this->assertEquals('PayPal payment made...', $paypalPayment->makePayment());
    }
}
