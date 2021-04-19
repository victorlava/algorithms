<?php

namespace Algorithm\Tests;

trait BaseTestTrait {

    private function createArrayOfNumbers(int $arraySize): array
    {
        $numbers = [];

        for($i = 0; $i < $arraySize; $i++) {
            $numbers[] = rand(1,30);
        }

        return $numbers;
    }

}