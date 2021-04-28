<?php
namespace Demo;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Boolean.php';

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