<?php
namespace Demo;

use PHPUnit\Framework\TestCase;

/**
 * @covers Demo\Payment
 */
class PaymentTest extends TestCase
{
    private $payment;

    protected function setUp(): void
    {
        $this->payment = new Payment(Config::getInstance());
    }

    protected function tearDown(): void
    {
        Config::getInstance()->clear();
    }

    public function testPaymentCanBeDisabledByConfiguration()
    {
        Config::getInstance()->set('disable_payment', true);
        $this->assertFalse($this->payment->isAllowed());
    }

    public function testPaymentIsAllowedByDefault()
    {
        $this->assertTrue($this->payment->isAllowed());
    }
}
