<?php

namespace Algorithm\ArrayString;

class FirstDuplicate {


    function search(array $numbers)
    {

        $map = [];

        for($i = 0; $i < count($numbers); $i++) {
            if(!array_key_exists($numbers[$i], $map)) {
                $map[$numbers[$i]] = 0;
            }

            $map[$numbers[$i]] += 1;

            if($map[$numbers[$i]] === 2) {
                return $numbers[$i];
            }
        }

        return -1;
    }

}


$test = new FirstDuplicate();
print_R($test->search([2, 1, 3, 5, 3, 2]));
print_R($test->search([0]));
print_R($test->search([0,1]));
//print_R($test->search([]));







