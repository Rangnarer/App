<?php
declare(strict_types = 1);
namespace App\tests;

use App\src\CalculateSum;
use PHPUnit\Framework\TestCase;

class CalculateSumTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testAdd($a, $b, $c)
    {
        $calc = new CalculateSum($a, $b);
        $this->assertSame($c, $calc->calculate());
    }

    public function provider()
    {
        return array(
            array(1, 1, 2),
            array(-1, -1, -2),
            array(null, null, 0),
            array('10', '10', 20),
            array(1.1, 1.1, 2.2),
            array('1.1', '1.1', 2.2)
        );
    }
}
