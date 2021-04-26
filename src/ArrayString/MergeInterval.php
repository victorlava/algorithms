<?php

namespace Algorithm\ArrayString;

class MergeInterval {

    function sort($a, $b)
    {
        if($a[0] == $b[0]) {
            return 0;
        }

        return ($a[0] < $b[0]) ? -1 : 1;
    }

    function merge(array $intervals)
    {

       usort($intervals, 'self::sort');

       $merged = [];
       foreach ($intervals as $interval) {

           // Adding our first interval in the merged array if there are no values
           // Also getting the last interval in the merged array and checking if it's second value is less than the current's interval first value
           // If it is then there's no overlap, no modifications neccessery for the merged interval
           if(empty($merged) || end($merged)[1] < $interval[0]) {
                $merged[] = $interval;
           } else {
               // Otherwise overlapping is found
               // We grab the last interval index in $merged array and override it's second value
               // Second value

               $lastIndex = count($merged) - 1; // grab the last index of merged
               $merged[$lastIndex][1] = max(end($merged)[1], $interval[1]);
           }

       }

       return $merged;
    }

}


$test = new MergeInterval();
//print_R($test->merge([[1,4],[0,2],[3,5]]));
//print_R($test->merge([[1,4],[2,3]]));
//print_R($test->merge([[1,9],[2,5],[19,20],[10,11],[12,20],[0,3],[0,1]]));
//print_R($test->merge([[1,3],[2,6],[8,10],[15,18]])); // [[1,6],[8,10],[15,18]], Since intervals [1,3] and [2,6] overlaps, merge them into [1,6].
