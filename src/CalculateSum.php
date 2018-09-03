<?php
declare(strict_types = 1);
namespace App\src;

class CalculateSum implements CalculatorInterface
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function calculate($c)
    {
        $value = (float)$this->a + (float)$this->b;

        if (is_int($c)) {
            $value = (int) $value;
        }
        
        if (is_string($c)) {
            $value = (string)$value;
        }

        return $value;
    }
}
