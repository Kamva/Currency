<?php
/**
 * Created by PhpStorm.
 * User: maral
 * Date: 11/7/16
 * Time: 12:46 PM
 */

namespace Kamva\Currency\Converter;


class Rate
{
    protected $from;
    protected $to;
    /**
     * Rate constructor.
     * @param $from
     * @param $to
     */
    public function __construct($from, $to)
    {
        $this->setFrom($from);
        $this->setTo($to);
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $From
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }


    public function rate()
    {
        if($this->getFrom() == "toman" && $this->getTo()== "rial")
        {
            $rate = new TomanToRial();
            return $rate;
        }
        elseif($this->getFrom() == "rial" && $this->getTo() == "toman")
        {
            $rate = new RialToToman();
            return $rate;
        }
    }
}