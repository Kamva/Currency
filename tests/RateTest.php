<?php
use Kamva\Currency\Converter\Rate;
use Kamva\Currency\Converter\RialToToman;
use Kamva\Currency\Converter\TomanToRial;

class RateTest extends PHPUnit_Framework_TestCase
{
    public function testRate()
    {
        $t = "toman";
        $r = "rial";
        $exception = new Exception();

        $r1 = new Rate($t,$r);
        $rate1 = $r1->rate();
        $r2 = new Rate($r,$t);
        $rate2 = $r2->rate();

        $this->assertTrue($rate1 == 10);
        $this->assertTrue($rate2 == 0.1);

        $r3 = new Rate("kj","lkn");
        $rate3 = $r3->rate();
        $this->assertInstanceOf(get_class($exception), $rate3);
    }
}
