<?php

namespace Algorithm\Shape;

class PolygonArea {

    /**
     * A 1-interesting polygon is just a square with a side of length 1.
     * An n-interesting polygon is obtained by taking the n - 1-interesting
     * polygon and appending 1-interesting polygons to its rim, side by side.
     * You can see the 1-, 2-, 3- and 4-interesting polygons in the picture below.
     */
    function shapeArea(int $n) {

        // 1. Find the middle box count
        // 2. Count bottom sections with n - 2
        // 3. Double the result, because we counted just half of the polygon


        //TODO: fix this, crappy idea, doesn't scale with bigger numbers,
        // wanted this solved mathmetatically by figuring out the factor
        // in which polygon increase and then just calculating the area
        
        // 1 5 13 24
        // 1 3 5 7 9 11
        // 1 2 3 4 5 6
        $middleBoxes = 1;

       $factor = 0.866666;

       $n * $middleBoxes;

       for($i = 1; $i < $n; $i++) {
           $middleBoxes += 2;
       }

       $area = $n * $factor * $middleBoxes;

        return round($area);

    }



}

$test = new PolygonArea();
echo $test->shapeArea(4);



