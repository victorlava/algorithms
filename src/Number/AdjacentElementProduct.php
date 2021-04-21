<?php

namespace Algorithm\Number;

class AdjacentElementProduct {

    /**
     * Given an array of integers, find the pair of adjacent
     * elements that has the largest product and return that product.
     */
    function solve(array $numbers)
    {

        $highest = -1001;
        $productLeft = -1001;
        $productRight = -1001;
        $highestLeft = 0;
        $highestRight = 0;

        for($i = 0; $i < count($numbers); $i += 2) {

            $l = $i - 1; // left pointer
            $r = $i + 1; // right pointer

            if(array_key_exists($l, $numbers)) {
                $productRight = $numbers[$l] * $numbers[$i];
            }

            if(array_key_exists($r, $numbers)) {
                $productLeft = $numbers[$i] * $numbers[$r];
            }

            $higher = $this->findHigherNumber($productLeft, $productRight);

            if($higher > $highest) {
                $highest = $higher;
            }
        }

        return $highest;
    }

    function findHigherNumber($first, $second)
    {
        if($first > $second) {
            return $first;
        }

        return $second;
    }

}

$test = new AdjacentElementProduct();
//echo $test->solve([3, 6, -2, -5, 7, 3]);
//echo $test->solve([5, 1, 2, 3, 1, 4]);
//echo $test->solve([-23, 4, -3, 8, -12]);


