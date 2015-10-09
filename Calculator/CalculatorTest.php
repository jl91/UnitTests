<?php

require_once("./Calculator.php");

class CalculatorTest extends PHPUnit_Framework_TestCase
{

	public function testMustReturn5OnFirstParamIs2AndSecondParamIs3()
	{

		$calculator = new Calculator();

		$expect =  5;

		$return = $calculator->sum(2,3);

		$this->assertEquals($expect, $return);
	}

	public function testMustReturn2OnFirstParamIs1AndSecondParamIs1() 
        {

                $calculator = new Calculator();

                $expect =  2;

                $return = $calculator->sum(1,1);

                $this->assertEquals($expect, $return);
        }

	public function testMustReturn1OnFirstParamIs3AndSecondParamIsNegative2() 
        {

                $calculator = new Calculator();

                $expect =  1;

                $return = $calculator->sum(3,-2);

                $this->assertEquals($expect, $return);
        }

	// Thats Ok

	public function testMustReturn4OnFirstParamis2AndSecondParamis2() 
        {

                $calculator = new Calculator();

                $expect =  4;

                $return = $calculator->mutiple(2,2);

                $this->assertEquals($expect, $return);
        }

	public function testMustReturn8OnFirstParamis2AndSecondParamIs4() 
        {

                $calculator = new Calculator();

                $expect =  8;

                $return = $calculator->mutiple(2,4);

                $this->assertEquals($expect, $return);
        }


	/**
	* @expectedException InvalidArgumentException
	*/
	public function testMustThrowInvalidArgumentExceptionOnFirstParamIsNotANumber() 
        {

                $calculator = new Calculator();

                $expect =  4;

                $return = $calculator->mutiple('a',2);

                $this->assertEquals($expect, $return);
        }


	/**
        * @expectedException InvalidArgumentException
        */
        public function testMustThrowInvalidArgumentExceptionOnSecondParamIsNotANumber() 
        {

                $calculator = new Calculator();

                $expect =  4;

                $return = $calculator->mutiple(2,'a');

                $this->assertEquals($expect, $return);
        }

}
