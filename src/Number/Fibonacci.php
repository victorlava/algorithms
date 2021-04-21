<?php

namespace Algorithm\Number;

class Fibonacci {


    function recursive() {}

    function iterative(int $numberOfCycles): array
    {

        $sequence = [0];

        // Constraints: F0 = 0, F1 = 1
        if($numberOfCycles === 0) {
            return $sequence;
        }

        if($numberOfCycles === 1) {
            $sequence[] = $numberOfCycles;
            return $sequence;
        }
        
        $number = 1;
        for($i = 0; $i < $numberOfCycles; $i++) {
            if($i !== 0) {
                $number += $sequence[$i - 1];
            }
            $sequence[] = $number;
        }


        return $sequence;
    }

}


$number = new Fibonacci();
print_R($number->iterative(10));
//print_R($number->iterative(0));
//print_R($number->iterative(1));



