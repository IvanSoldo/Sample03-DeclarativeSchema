<?php

namespace Inchoo\DeclarativeSchema\Block;

use Inchoo\DeclarativeSchema\Model\ResourceModel\Posts\CollectionFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Posts extends Template
{
    protected $postFactory;

    public function __construct(Context $context, CollectionFactory $postFactory)
    {
        $this->postFactory = $postFactory;
        parent::__construct($context);
    }

    public function getNews()
    {
        $posts = $this->postFactory->create();
        $posts->setOrder('post_id', 'DESC');
        $posts->setPageSize(10);

        return $posts;
    }
}
