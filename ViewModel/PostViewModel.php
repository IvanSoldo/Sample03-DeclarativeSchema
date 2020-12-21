<?php

namespace Inchoo\DeclarativeSchema\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class PostViewModel implements ArgumentInterface
{
    protected $postFactory;
    protected $postResource;

    public function __construct(
        \Inchoo\DeclarativeSchema\Model\ResourceModel\Post $postResource,
        \Inchoo\DeclarativeSchema\Model\PostFactory $postFactory
    ) {
        $this->postResource = $postResource;
        $this->postFactory = $postFactory;
    }

    public function getPostById($id)
    {
        $post = $this->postFactory->create();
        $this->postResource->load($post, $id, 'post_id');

        if ($post->getId() === null) {
            return;
        }

        return $post;
    }

}
