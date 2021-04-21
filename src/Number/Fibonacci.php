<?php

namespace Algorithm\Number;

class Fibonacci {


    function recursive() {}

    function iterative(int $numberOfCycles): array
    {

        $sequence = [0];
        if($numberOfCycles === 0) {
            return $sequence;
        }

        $sequence[] = 1;
        if($numberOfCycles === 1) {
            return $sequence;
        }

        for($i = 1; $i < $numberOfCycles; $i++) {
            $sequence[] = $sequence[$i] + $sequence[$i - 1];
        }

        return $sequence;
    }

}


$number = new Fibonacci();
print_R($number->iterative(100));
print_R($number->iterative(0));
print_R($number->iterative(1));
print_R($number->iterative(5));



