<?php
namespace Algorithm\Tests\Unit;

use Algorithm\ArrayString\FirstAndLast;
use PHPUnit\Framework\TestCase;

class FirstAndLastTest extends TestCase
{

    use BaseTestTrait;

    /** @var FirstAndLast  */
    private $firstAndLast;

    public function setUp(): void
    {
        parent::setUp();
        $this->firstAndLast = new FirstAndLast();
    }

    public function tearDown(): void
    {
        $this->arrayOfNumbers = null;
    }

    public function testSearchAndFind()
    {

        $result = $this->firstAndLast->searchAndFind([5,7,7,8,8,10], 8);
        $this->assertEquals([3,4], $result);

        $result = $this->firstAndLast->searchAndFind([1,4], 4);
        $this->assertEquals([1,1], $result);

        $result = $this->firstAndLast->searchAndFind([3,3,3], 3);
        $this->assertEquals([0,2], $result);

        $result = $this->firstAndLast->searchAndFind([], 0);
        $this->assertEquals([-1, -1], $result);

    }

}