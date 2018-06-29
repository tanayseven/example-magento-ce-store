<?php
/**
 * Created by PhpStorm.
 * User: tanay
 * Date: 29/6/18
 * Time: 3:02 PM
 */

namespace Someone\Calculator\Test\Unit\Controller\Index;


use Magento\Framework\App\Action\Context;
use Someone\Calculator\Controller\Index\Index;
use Someone\Calculator\Model\Calculator;

class IndexTest extends \PHPUnit_Framework_TestCase
{
    private $index;
    private $calculator;

    protected function setUp()
    {
        parent::setUp();
        $context = $this->getMock(Context::class, [], [], '', FALSE);
        $this->calculator = $this->getMock(Calculator::class, [], [], '', FALSE);
        $this->index = new Index($context, $this->calculator);
    }

    public function testThatExecuteReturnsSumOf5And5ToBe10() {
        $this->calculator->expects($this->once())->method('addNumbers')->willReturn('10');
        $actualValue = $this->index->execute();
        $this->assertEquals($actualValue, '10', 'The result of execute should return 10');
    }
}
