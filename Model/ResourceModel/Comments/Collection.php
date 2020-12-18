<?php

namespace Inchoo\DeclarativeSchema\Model\ResourceModel\Comments;

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
            \Inchoo\DeclarativeSchema\Model\Comments::class,
            \Inchoo\DeclarativeSchema\Model\ResourceModel\Comments::class
        );
    }
}
