<?php

namespace Algorithm\ArrayString;

class CenturyYear {


    /**
     * Given a year, return the century it is in.
     * The first century spans from the year 1 up to
     * and including the year 100, the second - from
     * the year 101 up to and including the year 200, etc.
     */

    function calculate(int $year)
    {

        $century = 0;

        $rounded =  floor($year / 100) * 100;

        if($year > $rounded) {
            $century = floor(($year / 100)) + 1;
        } else {
            $century = $rounded / 100;
        }

        return $century;
    }

}








