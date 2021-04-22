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


        if($n === 1) {
            return 1;
        }

        $sequence = 1;
        for($i = 0; $i < $n - 1; $i++) {
            $sequence += 2;
        }

        $boxCount = 0;
        $middleBoxCount = $sequence;

        for($i = $sequence; $sequence > 0; $i--) {
            $boxCount += $sequence;
            $sequence -= 2;
        }

        return (($boxCount - $middleBoxCount) * 2) + $middleBoxCount;
    }

}

$test = new PolygonArea();
echo $test->shapeArea(4);



