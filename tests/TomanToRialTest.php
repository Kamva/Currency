<?php
use Kamva\Currency\Converter\TomanToRial;

class TomanToRialTest extends PHPUnit_Framework_TestCase
{
    public function testChange()
    {
        $rate = new TomanToRial();
        $this->assertTrue($rate->change() == 10);
    }
}
