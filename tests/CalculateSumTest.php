<?php
declare(strict_types = 1);
namespace App\tests;

use App\src\CalculateSum;
use PHPUnit\Framework\TestCase;

/**
 * Class CalculateSumTest
 * @package App\tests
 */
class CalculateSumTest extends TestCase
{
    /**
     * @param $a
     * @param $b
     * @param $c
     * @dataProvider provider
     * @return void
     */
    public function testAdd($a, $b, $c): void
    {
        $calc = new CalculateSum($a, $b);
        $this->assertSame($c, $calc->calculate());
    }

    /**
     * @return array
     */
    public function provider(): array
    {
        return array(
            array(1, 1, 2.0),
            array(-1, -1, -2.0),
            array(null, null, 0.0),
            array('10', '10', 20.0),
            array(1.1, 1.1, 2.2),
            array('1.1', '1.1', 2.2)
        );
    }
}
