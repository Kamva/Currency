<?php
/**
 * Created by PhpStorm.
 * User: maral
 * Date: 11/7/16
 * Time: 12:47 PM
 */

namespace Kamva\Currency\Converter;

class RialToToman implements RateStrategy {

    public $tomanRate;

    /**
     * RialToToman constructor.
     * @param $tomanRate
     */
    public function __construct()
    {
        $this->setTomanRate(0.1);
    }

    /**
     * @return mixed
     */
    public function getTomanRate()
    {
        return $this->tomanRate;
    }

    /**
     * @param mixed $tomanRate
     */
    public function setTomanRate($tomanRate)
    {
        $this->tomanRate = $tomanRate;
    }

    public function change()
    {
        return $this->getTomanRate();
    }
}
