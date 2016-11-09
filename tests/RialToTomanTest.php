<?php
use Kamva\Currency\Converter\RialToToman;


class RialToTomanTest extends PHPUnit_Framework_TestCase
{
    public function testChange()
    {
        $rate = new RialToToman();
        $this->assertTrue($rate->change() == (float) (0.1));
    }
}
