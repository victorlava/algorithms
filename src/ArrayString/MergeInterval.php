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

           if(empty($merged) || end($merged)[1] < $interval[0]) { // if there's no merged values then add the value or if they are not overlapping
                $merged[] = $interval;
           } else { // overlapping
               $merged[count($merged) - 1][1] = max(end($merged)[1], $interval[1]);
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
