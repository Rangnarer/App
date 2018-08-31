<?php  

require 'App\src\CalculateSum.php';
use PHPUnit\Framework\TestCase;

class CalculateSumTest extends TestCase
{
	public function testCalculationOfPositiveNumbers()
	{
		$a = 5;
		$b = 5;
		$c = $a + $b;
		$sum = new \Calculator\CalculateSum($a,$b);
		$this->assertEquals($c, $sum->calculate());
	}

	public function testCalculationOfNegativeNumbers()
	{
		$a = -5;
		$b = -5;
		$c = $a + $b;
		$sum = new \Calculator\CalculateSum($a,$b);
		$this->assertEquals($c, $sum->calculate());
	}

	public function testCalculationOfNulls()
	{
		$a = null;
		$b = null;
		$c = $a + $b;
		$sum = new \Calculator\CalculateSum($a,$b);
		$this->assertEquals($c, $sum->calculate());
	}

	public function testCalculationOfStrings()
	{
		$a = "10";
		$b = "10";
		$c = (int)$a + (int)$b;
		$sum = new \Calculator\CalculateSum($a,$b);
		$this->assertEquals($c, $sum->calculate());
	}
}


