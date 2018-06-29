<?php
/**
 * Created by PhpStorm.
 * User: tanay
 * Date: 29/6/18
 * Time: 3:01 PM
 */

namespace Someone\Calculator\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Someone\Calculator\Model\Calculator;

class Index extends \Magento\Framework\App\Action\Action
{
    private $calculator;

    public function __construct(Context $context, Calculator $calculator)
    {
        parent::__construct($context);
        $this->calculator = $calculator;
    }


    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        return (string)$this->calculator->addNumbers(5, 5);
    }
}