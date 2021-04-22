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

    }

}


$test = new Consecutive();
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





