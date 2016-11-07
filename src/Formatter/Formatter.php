<?php
/**
 * Created by PhpStorm.
 * User: maral
 * Date: 11/7/16
 * Time: 12:48 PM
 */

namespace Kamva\Currency\Formatter;


class Formatter
{
    protected $number = 12546874651;

    public function perToEng($string)
    {

        $persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
        $num = range(0, 9);

        $string = str_replace($persian, $num, $string);
        //-------------------
        $str = [];
        $i = 0;
        while ($string % 1000 != 0)
        {
            $num = $string % 1000;
            $str[$i] = $num;
            $num = $string;
            $string = intval($num / 1000);

            $i++;
        }
        $str = array_reverse($str);
        $string = implode(",", $str);

        return $string."$";
    }

    public function engToPer($string)
    {
        $str = [];
        $i = 0;
        while ($string % 1000 != 0)
        {
            $num = $string % 1000;
            $str[$i] = $num;
            $num = $string;
            $string = intval($num / 1000);

            $i++;
        }
        $str = array_reverse($str);
        $string = implode("/", $str);
        //-----------
        $persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
        $num = range(0, 9);

        $string = str_replace($num, $persian, $string);
        return $string."﷼";
    }
}