<?php
/**
 * Created by PhpStorm.
 * User: maral
 * Date: 11/7/16
 * Time: 12:47 PM
 */

namespace Kamva\Currency\Converter;


class TomanToRial implements RateStrategy {

    public $rialRate;

    /**
     * TomanToRial constructor.
     * @param $rialRate
     */
    public function __construct()
    {
        $this->setRialRate(10);
    }

    /**
     * @return mixed
     */
    public function getRialRate()
    {
        return $this->rialRate;
    }

    public function change()
    {

        return $this->getRialRate();
    }

    /**
     * @param mixed $rialRate
     */
    public function setRialRate($rialRate)
    {
        $this->rialRate = $rialRate;
    }
}