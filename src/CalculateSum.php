<?php

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

    public function calculate()
    {
        $value = null;
        $value = (float)$this->a + (float)$this->b;
        return $value;
    }
}

