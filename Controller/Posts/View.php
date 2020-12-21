<?php

namespace Inchoo\DeclarativeSchema\Controller\Posts;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class ListAction
 * @package Inchoo\Sample03\Controller\Index
 *
 * List is reserved keyword in PHP, so we're using Action suffix in controller name !!
 */
class View extends \Magento\Framework\App\Action\Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    protected $postRegistry;

    public function __construct(Context $context, PageFactory $resultPageFactory, Registry $postRegistry)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->postRegistry = $postRegistry;
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $this->postRegistry->register('news_id', $id);

        return $this->resultPageFactory->create();
    }
}

