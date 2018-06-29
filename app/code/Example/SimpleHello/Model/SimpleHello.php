<?php
namespace Example\SimpleHello\Test\Model;

class HelloWorld extends \Magento\Framework\Model\AbstractModel {
    public function __construct()
    {
        parent::__construct();
        $this->_init('Example\SimpleHello\Model\ResourceModel\HelloWorld');
    }
}
