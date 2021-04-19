<?php

namespace Algorithm\Arrays;

class TwoSum {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $currentIndex = 0;
        $futureIndex = $currentIndex;
        $indices = [];

        for ($currentIndex = 0; $currentIndex < count($nums); $currentIndex++) {
            $futureIndex++;

            $numValue = $nums[$currentIndex] + $nums[$futureIndex];

            if($numValue === $target) {
                return [$currentIndex, $futureIndex];
            }

            if($futureIndex === count($nums) - 1) {
                break;
            }
        }

        throw new \Exception("No two sum solution");
    }

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
}

$solution = new TwoSum;
print_R($solution->bruteForce([3,2,4], 6));
//print_R($solution->twoSum([3,3], 6));
//print_R($solution->twoSum([3,9], 6));
