<?php
namespace Algorithm\Tests;

use Algorithm\Arrays\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{

    /** @var TwoSum  */
    private $twoSum;

    /** @var array  */
    private $arrayOfNumbers;

    public function setUp(): void
    {
        parent::setUp();
        $this->twoSum = new TwoSum();
        $this->arrayOfNumbers = $this->createArrayOfNumbers(9999999);
    }

    public function tearDown(): void
    {
        $this->arrayOfNumbers = null;
    }

    private function createArrayOfNumbers(int $arraySize): array
    {
        $numbers = [];

        for($i = 0; $i < $arraySize; $i++) {
            $numbers[] = rand(1,30);
        }

        return $numbers;
    }
    
    public function testBruteForce()
    {

        $result = $this->twoSum->bruteForce([2,7,11,15], 9);
        $this->assertEquals([0,1], $result);

        $result = $this->twoSum->bruteForce([3,2,4], 6);
        $this->assertEquals([1,2], $result);

        $result = $this->twoSum->bruteForce([0,2,10,4], 6);
        $this->assertEquals([1,3], $result);

        $result = $this->twoSum->bruteForce($this->arrayOfNumbers, 9);
        $this->assertEquals(9, $this->arrayOfNumbers[$result[0]] + $this->arrayOfNumbers[$result[1]]);

    }

    public function testArrayComplement()
    {

        $result = $this->twoSum->arrayComplement([2,7,11,15], 9);
        $this->assertEquals([0,1], $result);

        $result = $this->twoSum->arrayComplement([3,2,4], 6);
        $this->assertEquals([1,2], $result);

        $result = $this->twoSum->arrayComplement([0,2,10,4], 6);
        $this->assertEquals([1,3], $result);

        $result = $this->twoSum->arrayComplement($this->arrayOfNumbers, 9);
        $this->assertEquals(9, $this->arrayOfNumbers[$result[0]] + $this->arrayOfNumbers[$result[1]]);

    }
}