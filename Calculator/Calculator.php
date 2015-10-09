<?php 


class Calculator
{


	public function sum($number1, $number2)
	{
		return $number1 + $number2;
	}
	
	public function mutiple($number1, $number2)
	{
		if(!is_numeric($number1) || !is_numeric($number2)){
			throw new InvalidArgumentException('First Param Must be a number');
		}
	
		return $number1 * $number2;
	}

}
