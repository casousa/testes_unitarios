<?php 

namespace AppTest\Calculator;

use PHPUnit\Framework\TestCase;
use App\Calculator\Sum;

class SumTest extends TestCase
{

	public function setUp()
    {
    	$this->sum = new Sum();
    }

	public function testSumInteger()
    {
        $this->assertEquals(8, $this->sum->calculate(4,4));
    }
}