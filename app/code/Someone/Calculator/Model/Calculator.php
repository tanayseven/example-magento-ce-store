<?php

namespace Someone\Calculator\Model;

# I want two numbers to be added
# I want one number to be added to the previous result

class Calculator
{
    private $previousResult;

    public function __construct()
    {
        $this->previousResult = 0;
    }

    public function addNumbers($number1, $number2)
    {
        $this->previousResult = $number1 + $number2;
        return $this->previousResult;
    }

    public function addNumberToPrevious($number)
    {
        $this->previousResult += $number;
        return $this->previousResult;
    }
}
