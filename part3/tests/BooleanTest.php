<?php
namespace Demo;

class BooleanTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsNotFalse()
    {
        $boolean = new Boolean(true);
        $this->assertTrue($boolean->isTrue());
    }
    
    public function testFalseIsNotTrue()
    {
        $boolean = new Boolean(false);
        $this->assertFalse($boolean->isTrue());
    }
}