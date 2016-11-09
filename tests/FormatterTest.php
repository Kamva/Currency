<?php


use Kamva\Currency\Formatter\Formatter;

class FormatterTest extends PHPUnit_Framework_TestCase
{
    public $format;

    public function testPerToEng()
    {
        $this->format = new Formatter();
        $per_currency = $this->format->perToEng('۲۳۵۶۰۰۰۷۸۹۰۷۱۷۰۰۰');
        $this->assertTrue($per_currency == "23,560,007,890,717,000");
    }

    public function testEngToPer()
    {
        $this->format = new Formatter();
        $eng_currency = $this->format->engToPer('23560007890717000');
        $this->assertTrue($eng_currency == "۲۳/۵۶۰/۰۰۷/۸۹۰/۷۱۷/۰۰۰﷼");
    }
}
