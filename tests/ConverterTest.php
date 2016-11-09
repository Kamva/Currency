<?php

use Kamva\Currency\Converter\Converter;

class ConverterTest extends PHPUnit_Framework_TestCase
{
    public $number;

    /**
     *
     */
    public function testConverter()
    {
        $this->number = new Converter(23560007890717, "toman", "rial");
        $money = $this->number->getValue();
        $this->assertTrue($money == 23560007890717);

        $num = $this->number->change();
        $this->assertTrue($num == '۲۳۵/۶۰۰/۰۷۸/۹۰۷/۱۷۰﷼');
    }
}
