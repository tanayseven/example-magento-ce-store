<?php
/**
 * Created by PhpStorm.
 * User: tanay
 * Date: 27/6/18
 * Time: 7:45 PM
 */

namespace Example\HelloUnitTest\Test\Unit\Model;


class Calculator extends \PHPUnit_Framework_TestCase {
    private $_objectManager;
    private $_calculator;

    public function setUp() {
        $this->_objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->_calculator = $this->_objectManager->getObject("Example\HelloUnitTest\Model\Calculator");
    }

    public function testAddition() {
        $actualResult = $this->_calculator->addition(7, 3);
        $expectedResult = 10;
        $this->assertEquals($expectedResult, $actualResult, 'Addition of 7 and 3 should be 10');
    }
}