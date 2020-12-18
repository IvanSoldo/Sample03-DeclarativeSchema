<?php

namespace Inchoo\DeclarativeSchema\Model\ResourceModel\Posts;

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
            \Inchoo\DeclarativeSchema\Model\Posts::class,
            \Inchoo\DeclarativeSchema\Model\ResourceModel\Posts::class
        );
    }
}
