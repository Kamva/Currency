<?php
/**
 * Created by PhpStorm.
 * User: maral
 * Date: 11/7/16
 * Time: 12:45 PM
 */

namespace Kamva\Currency\Converter;


class Converter
{
    protected $rate;
    protected $value;
    protected $from;
    protected $to;

    /**
     * converter constructor.
     * @param $value
     * @param $from
     * @param $to
     */
    public function __construct($value, $from, $to)
    {
        $this->setValue($value);
        $this->rate = new Rate($from, $to);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}