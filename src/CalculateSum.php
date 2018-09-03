<?php
declare(strict_types = 1);
namespace App\src;

/**
 * Class CalculateSum
 * @package App\src
 */
class CalculateSum implements CalculatorInterface
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = (float)$a;
        $this->b = (float)$b;
    }

    public function calculate(): float
    {
        $value = $this->a + $this->b;

        return $value;
    }
}
