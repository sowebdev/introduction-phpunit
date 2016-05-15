<?php
namespace Demo;

class Boolean
{
    private $value;
    
    public function __construct($value)
    {
        $this->value = (bool) $value;
    }
    
    public function isTrue()
    {
        return $this->value === true;
    }
    
    public function isFalse()
    {
        return $this->value === false;
    }
}