<?php

namespace App\Tests;

use App\OpenClosedPrinciple\CashPayment;
use PHPUnit\Framework\TestCase;

class CashPaymentTest extends TestCase
{
    public function testCashPaymentMakePayment()
    {
        $cashPayment = new CashPayment();
        $this->assertEquals('Cash payment made...', $cashPayment->makePayment());
    }
}
