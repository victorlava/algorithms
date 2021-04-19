<?php

namespace Algorithm\Arrays;

class TwoSum {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function bruteForce($nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for($b = 0; $b < count($nums); $b++) {
                $addition = $nums[$i] + $nums[$b];
                if($addition === $target && $i !== $b) {
                    return [$i, $b];
                }
            }
        }

        throw new \Exception('No two sum solution');
    }

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function arrayComplement($nums, $target)
    {
        $valueAsArrayKey = [];

        for($i = 0; $i < count($nums); $i++) {
            $valueAsArrayKey[$nums[$i]] = $i; // Creating an array that have $nums array values as keys for faster search later, O(n) space complexity
            $complement = $target - $nums[$i];

            if(array_key_exists($complement, $valueAsArrayKey) && // Checking if $target - $nums[$i] exists in array. Each lookup should be only O(1)
                $i !== $valueAsArrayKey[$complement]) { // Can't be itself

                return [$valueAsArrayKey[$complement], $i];
             }
        }

        throw new \Exception("No two sum solution");
    }

}


//$test = new TwoSum();
//print_R($test->arrayComplement([2,11,15,7], 9));
//print_R($test->arrayComplement([3,2,4], 6));




