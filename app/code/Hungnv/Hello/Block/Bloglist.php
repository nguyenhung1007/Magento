<?php
namespace Hungnv\Hello\Block;

use Magento\Framework\View\Element\Template;
use Hungnv\Hello\Model\ResourceModel\Posts\CollectionFactory;

class Bloglist extends Template
{
    protected $PostsFactory;

    public function __construct(Template\Context $context, CollectionFactory $postsFactory)
    {
        $this->PostsFactory = $postsFactory;
        parent::__construct($context);
    }

    public function GetBlog(){
        $blog = $this->PostsFactory->create();
        return $blog;
    }
}
