<?php
/**
 * Created by PhpStorm.
 * User: maral
 * Date: 11/7/16
 * Time: 12:46 PM
 */

namespace Kamva\Currency\Converter;


interface RateStrategy
{
    public function change();
}