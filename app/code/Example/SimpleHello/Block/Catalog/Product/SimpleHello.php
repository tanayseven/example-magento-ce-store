<?php

namespace Example\SimpleHello\Block\Catalog\Product;


class SimpleHello extends \Magento\Framework\View\Element\Template
{
    protected $_helper;

    protected $_objectManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Example\SimpleHello\Helper\Data $helper,
        \Magento\Framework\ObjectManagerInterface $objectManager
    ) {
        parent::__construct($context, $data);

        $this->_helper = $helper;
        $this->_objectManager = $objectManager;
    }

    public function getBlockLabel(){
        return $this->_helper->getBlockLabel();
    }

    public function getTextAlign(){
        return $this->_helper->getTextAlign();
    }

    protected function _toHtml()
    {
        if ($this->_helper->getEnable()){
            return parent::_toHtml();
        }
        else {
            return '';
        }
    }

    public function getCollection()
    {
        $model = $this->_objectManager->create('Example\SimpleHello\Model\SimpleHello');
        $collection = $model->getCollection();

        return $collection;
    }

}
