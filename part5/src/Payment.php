<?php
namespace Demo;

class Payment
{
    private $config;
    
    public function __construct(Config $config)
    {
        $this->config = $config;
    }
    
    public function isAllowed()
    {
        if ($this->config->get('disable_payment')) {
            return false;
        }
        return true;
    }
}
