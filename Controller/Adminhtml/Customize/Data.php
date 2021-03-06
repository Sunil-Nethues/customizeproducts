<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Chilliapple\Customizeproducts\Controller\Adminhtml\Customize;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\LayoutFactory;
use Magento\Backend\App\Action;

/**
 * Class Data
 * 
 * @package Chilliapple\Customizeproducts\Controller\Adminhtml\Customize
 */
class Data extends Action
{

    /**
     * @var \Magento\Framework\View\Result\LayoutFactory
     */
    protected $resultLayoutFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory
     */
    public function __construct(
        Context $context,
        LayoutFactory $resultLayoutFactory
    ) {
        parent::__construct($context);
        $this->resultLayoutFactory = $resultLayoutFactory;
    }

    /**
     * Get options fieldset block
     *
     * @return \Magento\Framework\View\Result\Layout
     */
    public function execute()
    {
        return $this->resultLayoutFactory->create();
    }

}