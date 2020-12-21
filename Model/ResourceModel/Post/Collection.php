<?php

namespace Inchoo\DeclarativeSchema\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize news Collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Inchoo\DeclarativeSchema\Model\Post::class,
            \Inchoo\DeclarativeSchema\Model\ResourceModel\Post::class
        );
    }
}
