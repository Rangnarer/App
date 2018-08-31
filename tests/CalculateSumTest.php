<?php

namespace App\tests;

use App\src\CalculateSum;
use PHPUnit\Framework\TestCase;

class CalculateSumTest extends TestCase
{
    public function testCalculationOfPositiveNumbers()
    {
        $a = 5;
        $b = 5;
        $sum = new CalculateSum($a, $b);
        $this->assertEquals(10, $sum->calculate());
    }

    public function testCalculationOfNegativeNumbers()
    {
        $a = -5;
        $b = -5;
        $sum = new CalculateSum($a, $b);
        $this->assertEquals(-10, $sum->calculate());
    }

    public function testCalculationOfNulls()
    {
        $a = null;
        $b = null;
        $sum = new CalculateSum($a, $b);
        $this->assertEquals(0, $sum->calculate());
    }

    public function testCalculationOfStrings()
    {
        $a = "10";
        $b = "10";
        $sum = new CalculateSum($a, $b);
        $this->assertEquals(20, $sum->calculate());
    }
}


