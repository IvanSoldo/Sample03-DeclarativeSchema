<?php

namespace Inchoo\DeclarativeSchema\Model\ResourceModel;

class Comments extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize news Resource
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('inchoo_posts_comment', 'id');
    }
}
