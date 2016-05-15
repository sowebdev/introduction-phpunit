<?php
namespace Demo;

class BooleanTest extends \PHPUnit_Framework_TestCase
{   
    /**
    * @dataProvider getTruthyValues
    **/
    public function testTruthyValueIsTrue($value)
    {
        $boolean = new Boolean($value);
        $this->assertTrue($boolean->isTrue());
        $this->assertFalse($boolean->isFalse());
    }
    
    /**
    * @dataProvider getFalsyValues
    **/
    public function testFalsyValueIsFalse($value)
    {
        $boolean = new Boolean($value);
        $this->assertFalse($boolean->isTrue());
        $this->assertTrue($boolean->isFalse());
    }
    
    public function getTruthyValues()
    {
        return array(
            array(true),
            array(1),
            array('1')
        );    
    }
    
    public function getFalsyValues()
    {
        return array(
            array(false),
            array(0),
            array('')
        );    
    }
}