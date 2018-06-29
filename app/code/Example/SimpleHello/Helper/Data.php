<?php
/**
 * Created by PhpStorm.
 * User: tanay
 * Date: 28/6/18
 * Time: 4:03 PM
 */

namespace Example\SimpleHello\Helper;


use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\Context;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const ENABLE = 'example_simplehello/general/enable';
    const BLOCK_LABEL = 'example_simplehello/general/block_label';
    const TEXT_ALIGN = 'example_simplehello/general/text_align';

    private $_scopeConfig;

    public function __construct(Context $context, ScopeConfigInterface $scopeConfig)
    {
        parent::__construct($context);
        $this->_scopeConfig = $scopeConfig;
    }

    public function getEnable() {
        return $this->_scopeConfig->getValue(self::ENABLE);
    }

    public function getBlockLabel() {
        return $this->_scopeConfig->getValue(self::BLOCK_LABEL);
    }

    public function getTextAlign() {
        return $this->_scopeConfig->getValue(self::TEXT_ALIGN);
    }
}