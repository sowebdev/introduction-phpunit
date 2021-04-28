<?php
class FirstTest extends \PHPUnit\Framework\TestCase
{
    public function testTrueIsNotFalse()
    {
        $this->assertNotFalse(true);
    }
    
    public function testFalseIsNotTrue()
    {
        $this->assertNotTrue(false);
    }
}