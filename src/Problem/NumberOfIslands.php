<?php

namespace Algorithm\Problem;

/* Given an m x n 2D binary grid grid which represents a map of '1's (land) and '0's (water),
  return the number of islands. An island is surrounded by water and is formed by connecting
  adjacent lands horizontally or vertically. An island is surrounded by water and is formed
  by connecting adjacent lands horizontally or vertically. You may assume all four edges of
  the grid are all surrounded by water.
 */


class NumberOfIslands {

    function getNumber() {

        // 1. Loop through the array
        // 2. Find the first 1.
        // 3. Check if i has a neighbour on x: -1 and 1, also on y: -1 and 1
        //  3.1 if doesn't have neighbour around it - add it to an array with lands and continue to find another 1
        //  3.2 If 1 has a neighbour around then loop to the neighbour until there's no 1 and then add it to the land array
        // 4. After this find another 1 and repeat step 3
        // 5. If there are no 1 and 0 stop the cycle and count the lands in the land array.

    }

}


$test = new NumberOfIslands();
$grid = [
    ["1","1","1","1","0"],
    ["1","1","0","1","0"],
    ["1","1","0","0","0"],
    ["0","0","0","0","0"]
];

print_R($test->getNumber($grid)); // 1

$grid = [
    ["1","1","0","0","0"],
    ["1","1","0","0","0"],
    ["0","0","1","0","0"],
    ["0","0","0","1","1"]
];

print_R($test->getNumber($grid)); // 3





