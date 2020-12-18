<?php

namespace Inchoo\DeclarativeSchema\Model;

class Comments extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize news Model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Inchoo\DeclarativeSchema\Model\ResourceModel\Comments::class);
    }

}
