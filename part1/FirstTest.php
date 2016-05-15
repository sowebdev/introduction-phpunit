<?php
class FirstTest extends PHPUnit_Framework_TestCase
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