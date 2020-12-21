<?php

namespace Inchoo\DeclarativeSchema\Block;

use Inchoo\DeclarativeSchema\Model\ResourceModel\Post\CollectionFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class PostListBlock extends Template
{
    protected $postCollectionFactory;

    public function __construct(Context $context, CollectionFactory $postCollectionFactory)
    {
        $this->postCollectionFactory = $postCollectionFactory;
        parent::__construct($context);
    }

    public function getPosts()
    {
        $posts = $this->postCollectionFactory->create();
        $posts->setOrder('post_id', 'DESC');
        $posts->setPageSize(10);

        return $posts;
    }
}
