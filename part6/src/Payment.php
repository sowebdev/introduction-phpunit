<?php
namespace Demo;

class Payment
{
    private $config;
    private $gateway;

    public function __construct(Config $config, GatewayInterface $gateway)
    {
        $this->config = $config;
        $this->gateway = $gateway;
    }
    
    public function isAllowed()
    {
        if ($this->config->get('disable_payment')) {
            return false;
        }
        if ($this->gateway->getBalance() < 0) {
            return false;
        }
        return true;
    }

    public function pay($amount)
    {
        if (!$this->isAllowed()) {
            return;
        }
        $this->gateway->send($amount);
    }
}
