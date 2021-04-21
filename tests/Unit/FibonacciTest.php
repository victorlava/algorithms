<?php
namespace Algorithm\Tests\Unit;

use Algorithm\Number\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{

    use BaseTestTrait;

    /** @var Fibonacci  */
    private $fibonacci;

    public function setUp(): void
    {
        parent::setUp();
        $this->fibonacci = new Fibonacci();
    }

    public function testRecursive()
    {

        $result = $this->fibonacci->recursive(0);
        $this->assertEquals(0, $result);

        $result = $this->fibonacci->recursive(1);
        $this->assertEquals(1, $result);

        $result = $this->fibonacci->recursive(2);
        $this->assertEquals(1, $result);

        $result = $this->fibonacci->recursive(11);
        $this->assertEquals(89, $result);

    }
    public function testIterative()
    {

        $result = $this->fibonacci->iterative(0);
        $this->assertEquals([0], $result);

        $result = $this->fibonacci->iterative(1);
        $this->assertEquals([0,1], $result);

        $result = $this->fibonacci->iterative(2);
        $this->assertEquals([0,1,1], $result);

        $result = $this->fibonacci->iterative(11);
        $this->assertEquals([0,1,1,2,3,5,8,13,21,34,55,89], $result);

    }

}