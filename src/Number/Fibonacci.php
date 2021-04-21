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

    function recursiveWithMemoization(int $n, &$sequence = [0, 1])
    {
        if(!array_key_exists($n,$sequence)) {
            $sequence[$n] = $this->recursiveWithMemoization($n - 1, $sequence) + $this->recursiveWithMemoization($n - 2, $sequence);
        }

        return $sequence[$n];
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

//$test = new Fibonacci();
//echo $test->recursiveWithMemoization(5);




