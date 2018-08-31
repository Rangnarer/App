<?php

namespace Calculator;  	
use CalculatorInterface.php;	

class CalculateSum implements CalculatorInterface
{
	private $a;
	private $b;
	
	function __construct($a, $b) {
   		$this->a = $a;
   		$this->b = $b;
	}

	public function calculate() {
		$value;

		if (is_string($this->a) || is_string($this->b)) {
			$value = (int)$this->a + (int)$this->b;
		}else{
			$value = $this->a + $this->b;
		}
		
		return $value;
	}
}

