<?php

namespace Inchoo\DeclarativeSchema\Block;

use Magento\Framework\View\Element\Template;
use Inchoo\DeclarativeSchema\Model\ResourceModel\Posts\CollectionFactory;

class View extends Template
{
    protected $postsFactory;
    public function __construct(Template\Context $context, CollectionFactory $postsFactory, array $data = [])
    {
        parent::__construct($context, $data);
        $this->postsFactory = $postsFactory;
    }
    public function showNews($id)
    {
        $id = $this->getRequest()->getParam('id', $id);
        $news = $this->postsFactory->create()->addFieldToFilter('post_id', ['id' => $id])->getFirstItem();
        $data = $news->getData();
        return $data;
    }

}
