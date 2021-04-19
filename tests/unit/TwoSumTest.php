<?php
namespace Algorithm\Tests;

use Algorithm\Arrays\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
        $this->twoSum = new TwoSum();
    }

    public function testTwoSum()
    {

        $result = $this->twoSum->twoSum([2,7,11,15], 9);
        $this->assertEquals([0,1], $result);

        $result = $this->twoSum->twoSum([3,2,4], 6);
        $this->assertEquals([1,2], $result);

        $result = $this->twoSum->twoSum([0, 1, 2, 9, 10, 4], 6);
        $this->assertEquals([2,5], $result);

    }
}