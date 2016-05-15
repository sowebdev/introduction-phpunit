<?php
namespace Demo;

interface GatewayInterface
{
    public function getBalance();

    public function send($amount);
}
