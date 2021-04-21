<?php

namespace Algorithm\Number;

class Fibonacci {


    function recursive(int $n)
    {
        if($n === 0 || $n === 1) {
            return $n;
        }

        return $this->recursive($n - 1) + $this->recursive($n - 2);
    }

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




