<?php
namespace Demo;

/**
 * @covers Demo\Payment
 */
class PaymentTest extends \PHPUnit_Framework_TestCase
{
    private $payment;

    protected function setUp()
    {
        $this->payment = new Payment(Config::getInstance());
    }

    protected function tearDown()
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
