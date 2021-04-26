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

       print_R($intervals);

       $merged = [];

       for($i = 0; $i < count($intervals); $i++) {

           if(isset($intervals[$i + 1])) {
               if($intervals[$i][1] >= $intervals[$i + 1][0]) { //overlap

                   if($intervals[$i][1] > $intervals[$i + 1][1]) {
                       $merged[] = $intervals[$i];
                   } else {
                       $merged[] = [$intervals[$i][0], $intervals[$i + 1][1]];
                   }

                   $i++;
                   continue;
               }
           }

           $merged[] = $intervals[$i];


       }

       return $merged;
    }

}


$test = new MergeInterval();
print_R($test->merge([[1,4],[0,2],[3,5]]));
//print_R($test->merge([[1,4],[2,3]]));
//print_R($test->merge([[1,9],[2,5],[19,20],[10,11],[12,20],[0,3],[0,1]]));
//print_R($test->merge([[1,3],[2,6],[8,10],[15,18]])); // [[1,6],[8,10],[15,18]], Since intervals [1,3] and [2,6] overlaps, merge them into [1,6].
