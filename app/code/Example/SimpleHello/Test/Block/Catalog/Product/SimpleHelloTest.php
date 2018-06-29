<?php

namespace Example\SimpleHello\Test\Block\Catalog\Product;

use Example\SimpleHello\Block\Catalog\Product\SimpleHello;
use Example\SimpleHello\Helper\Data;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

class SimpleHelloTest extends \PHPUnit_Framework_TestCase
{
    private $_simpleHello;
    private $configMock;
    private $helper;

    protected function setUp()
    {
        parent::setUp();
        $this->configMock = $this->getMock('Magento\Framework\App\Config\ScopeConfigInterface');
        $objectHelper = new ObjectManager($this);
        $context = $objectHelper->getObject(
            'Magento\Backend\Block\Template\Context',
            ['scopeConfig' => $this->configMock]
        );
        $this->helper = $this->getMock(Data::class, ['getBlockLabel', 'getTextAlign', 'getEnable'], [], '', false);
        $_objectManagerMock = $this->getMock('Magento\Framework\ObjectManagerInterface');
        $this->_simpleHello = new SimpleHello(
            $context,
            [],
            $this->helper,
            $_objectManagerMock
        );
    }

    public function testThatSimpleHelloReturnsTheCorrectValueWhenCalled() {
        $this->helper->expects($this->once())->method('getBlockLabel')->willReturn('Test Block Label');
        $this->assertEquals('Test Block Label', $this->_simpleHello->getBlockLabel(), 'Call to get block label of simple hello should return the correct argument');
    }
}