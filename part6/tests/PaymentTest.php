<?php
namespace Demo;

use PHPUnit\Framework\TestCase;

/**
 * @covers Demo\Payment
 */
class PaymentTest extends TestCase
{
    private $payment;
    private $gateway;

    protected function setUp(): void
    {
        $this->gateway = $this->getMockBuilder('Demo\GatewayInterface')
            ->getMock();
        $this->payment = new Payment(Config::getInstance(), $this->gateway);
    }

    protected function tearDown(): void
    {
        Config::getInstance()->clear();
    }

    public function testPaymentIsAllowedWhenBalanceIsPositive()
    {
        $this->gateway->method('getBalance')->willReturn(100);
        $this->assertTrue($this->payment->isAllowed());
    }

    public function testPaymentIsNotAllowedWhenBalanceIsNegative()
    {
        $this->gateway->method('getBalance')->willReturn(-100);
        $this->assertFalse($this->payment->isAllowed());
    }

    /**
     * @covers Demo\Payment::pay
     */
    public function testPaymentIsSentThroughGateway()
    {
        $amount = 20;
        $this->gateway->method('getBalance')->willReturn(100);
        $this->gateway->expects($this->once())
            ->method('send')
            ->with($amount);

        $this->payment->pay($amount);
    }
}
