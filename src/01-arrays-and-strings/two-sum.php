<?php

class Solution {

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
}

$solution = new Solution;


print_R($solution->twoSum([0,7,11,15,21,22,13,6], 9));
print_R($solution->twoSum([2,7,11,15], 9));
print_R($solution->twoSum([3,2,4], 6));
print_R($solution->twoSum([3,3], 6));
print_R($solution->twoSum([3,9], 6));
