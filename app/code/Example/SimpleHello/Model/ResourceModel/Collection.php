<?php

namespace Example\SimpleHello\Model\ResourceModel;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Example\SimpleHello\Model\SimpleHello', 'Example\SimpleHello\Model\ResourceModel\SimpleHello');
    }
}