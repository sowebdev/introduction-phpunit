<?php
namespace Demo;

use PHPUnit\Framework\TestCase;

class BooleanTest extends TestCase
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