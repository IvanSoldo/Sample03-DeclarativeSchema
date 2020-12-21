<?php

namespace Inchoo\DeclarativeSchema\Block;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Inchoo\DeclarativeSchema\Model\ResourceModel\Post\CollectionFactory;

class PostViewBlock extends Template
{
    protected $postRegistry;

    public function __construct(Template\Context $context, Registry $postRegistry, array $data = [])
    {
        parent::__construct($context, $data);
        $this->postRegistry = $postRegistry;
    }

    public function getPostId()
    {
        return $this->postRegistry->registry('news_id');
    }

}
