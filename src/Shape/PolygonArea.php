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

        //TODO: add unit tests and check the performance
        
        /* Explanation.
           This solution is done from mathematical standpoint by simply observing that with every n increase
           the middle box count increases by 2. This is just a simple linear regression that can be replicated
           with a simple loop. For ex. 1 3 5 7 9. Then in the second loop I loop from the max value until I hit 0.
           Every loop adds last $sequence number to $boxCount. This let's me to count half of the polygon.
           At the end with have simple formula, which removes middle box count from the box count and multiplies it by 2.
           This let's us to count area for both of the sides excluding the middle line boxes. After calculating both of
           the sides (excluding the middle line) we add the middle line box count and we have a final answer.
         */
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



