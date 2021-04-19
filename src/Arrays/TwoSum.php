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
    function twoSumWithArrayComplement($nums, $target)
    {
        $valueAsArrayKey = [];

        for($i = 0; $i < count($nums); $i++) {
            $valueAsArrayKey[$nums[$i]] = $i;
            $complement = $target - $nums[$i];

            if(array_key_exists($complement, $valueAsArrayKey)) {
                return [$valueAsArrayKey[$complement], $i];
             }
        }

        throw new \Exception("No two sum solution");
    }

}


$test = new TwoSum();
print_R($test->twoSumHashTable([2,11,15,7], 9));
//print_R($test->twoSumHashTable([3,2,4], 6));




