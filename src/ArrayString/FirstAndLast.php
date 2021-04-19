<?php

namespace Algorithm\ArrayString;

/**
 * Given an array of integers nums sorted in ascending order, find the starting and ending position of a given target value.
 * If target is not found in the array, return [-1, -1].
 * Follow up: Could you write an algorithm with O(log n) runtime complexity?
 */

class FirstAndLast {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchAndFind($nums, $target)
    {

        // TODO: this seems to work pretty fine, the time/space complexity should be 0(n),
        // Implement: binary search
        // Test the performance against binary search
        
        $indices = [];

        for($i = 0; $i < count($nums);$i++) {

            /*  If target is < $nums[$i] in loop just exit.
                No point in searching any further, because
                array is in asc. order */
            if( count($nums) - 1 > $i + 1 &&  // Make sure we are not exceeding the possible index
                $target < $nums[$i]) {
                break;
            }

            if($nums[$i] === $target) { // If we target equals num from array then add it's index to startEnd array
                $indices[] = $i;
            }
        }

        if(!$indices) { // Just return default result if we don't have anything in the startEnd array
            return [-1, -1];
        }

        return [$indices[0], $indices[count($indices) - 1]]; // Return the last index from the indices
    }

}


//$test = new FirstAndLast();
//print_R($test->searchAndFind([5,7,7,8,8,10], 8));
//print_R($test->searchAndFind([5,7,7,8,8,10], 10));
//print_R($test->searchAndFind([1,4], 4));
//print_R($test->searchAndFind([3,3,3], 3));
//print_R($test->searchAndFind([1], 1));
//print_R($test->searchAndFind([], 0));





