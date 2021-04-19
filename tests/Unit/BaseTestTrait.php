<?php

namespace Algorithm\Tests\Unit;

trait BaseTestTrait {

    public function createArrayOfNumbers(int $arraySize): array
    {
        $numbers = [];

        for($i = 0; $i < $arraySize; $i++) {
            $numbers[] = rand(1,30);
        }

        return $numbers;
    }

}