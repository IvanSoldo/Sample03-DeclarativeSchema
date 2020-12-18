<?php

namespace Inchoo\DeclarativeSchema\Controller\Test;

use Magento\Framework\App\Action\Context;

class Crud extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Inchoo\DeclarativeSchema\Model\ResourceModel\Posts
     */
    protected $newsResource;

    /**
     * @var \Inchoo\DeclarativeSchema\Model\NewsFactory
     */
    protected $newsModelFactory;

    protected $commentsResource;

    protected $commentsModelFactory;

    /**
     * Controller constructor.
     * @param Context $context
     * @param \Inchoo\DeclarativeSchema\Model\ResourceModel\Posts $newsResource
     * @param \Inchoo\DeclarativeSchema\Model\PostsFactory $newsModelFactory
     * @param \Inchoo\DeclarativeSchema\Model\ResourceModel\Comments $commentsResource,
     * @param \Inchoo\DeclarativeSchema\Model\CommentsFactory $commentsModelFactory
     */
    public function __construct(
        Context $context,
        \Inchoo\DeclarativeSchema\Model\ResourceModel\Posts $newsResource,
        \Inchoo\DeclarativeSchema\Model\PostsFactory $newsModelFactory,
        \Inchoo\DeclarativeSchema\Model\ResourceModel\Comments $commentsResource,
        \Inchoo\DeclarativeSchema\Model\CommentsFactory $commentsModelFactory
    ) {
        parent::__construct($context);

        $this->newsResource = $newsResource;
        $this->newsModelFactory = $newsModelFactory;
        $this->commentsResource = $commentsResource;
        $this->commentsModelFactory = $commentsModelFactory;
    }

    /**
     * Controller action.
     */
    public function execute()
    {
        /**
         * New entry example
         */
        $news = $this->newsModelFactory->create();
        $news->setCreatedAt(new \DateTime('now'));
        $this->newsResource->save($news);

        $comment = $this->commentsModelFactory->create();
        $comment->setPostId(1);
        $this->commentsResource->save($comment);

        //var_dump($news); //big dump, can crash browser without xdebug
        var_dump($news->debug());
        var_dump($comment->debug());

        /**
         * Load example
         */
        $news = $this->newsModelFactory->create();
        $this->newsResource->load($news, 1);

        if ($news->getId()) {
            //check if loaded
        }

        var_dump($news->debug());
    }
}
