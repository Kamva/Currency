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

    public function perToEng($string)
    {

        $persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
        $num = range(0, 9);

        $string = str_replace($persian, $num, $string);
        //-------------------
        $str = [];
        $i = 0;
        while ($string / 1000 > 0)
        {
            if ($string<1000)
            {
                $num = $string % 1000;
                $str[$i] = $num;
            }else {

                $num = $string % 1000;
                $str[$i] = substr('00'.$num, -3);
            }

            $num = $string;
            $string = floor($num / 1000);

            $i++;
        }
        $str = array_reverse($str);
        $string = implode(",", $str);

        return $string;
    }

    public function engToPer($string)
    {
        $str = [];
        $i = 0;
        while ($string / 1000 > 0)
        {
            if ($string<1000)
            {
                $num = $string % 1000;
                $str[$i] = $num;
            }else {

                $num = $string % 1000;
                $str[$i] = substr('00'.$num, -3);
            }

            $num = $string;
            $string = floor($num / 1000);

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