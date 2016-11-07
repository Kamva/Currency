<?php
/**
 * Created by PhpStorm.
 * User: maral
 * Date: 11/7/16
 * Time: 12:47 PM
 */

namespace Kamva\Currency\Converter;

class RialToToman implements RateStrategy {

    public function change()
    {
        $tomanRate = 0.1;
        return $tomanRate;
    }
}
