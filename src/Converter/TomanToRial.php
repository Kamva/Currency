<?php
/**
 * Created by PhpStorm.
 * User: maral
 * Date: 11/7/16
 * Time: 12:47 PM
 */

namespace Kamva\Currency\Converter;


class TomanToRial implements RateStrategy {

    public function change()
    {
        $rialRate = 10;
        return $rialRate;
    }
}