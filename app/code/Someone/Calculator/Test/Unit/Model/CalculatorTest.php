<?php

namespace Someone\Calculator\Test\Model;

use Someone\Calculator\Model\Calculator;

final class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    private $calculator;

    protected function setUp()
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }

    public function testThatTheSumShouldBe5IfTwoNumbersAreGivenAs2and3() {
        $result = $this->calculator->addNumbers(2, 3);
        $this->assertEquals(5, $result, 'The sum should be 5');
    }

    public function testTHatTheSumShouldBe10IfTwoNumbersAreGivenAs4nd6() {
        $result = $this->calculator->addNumbers(4, 6);
        $this->assertEquals(10, $result, 'The sum should be 10');
    }

    public function testThatTheSumOfThreeNumbersWhichAreAll3ShouldBe9() {
        $this->calculator->addNumbers(3 ,3);
        $result = $this->calculator->addNumberToPrevious(3);
        $this->assertEquals(9, $result, 'The sum should be 9');
    }

}
