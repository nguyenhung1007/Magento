<?php
namespace Hungnv\Hello\Controller\Adminhtml\Posts;

use Hungnv\Hello\Controller\Adminhtml\Posts;
use Hungnv\Hello\Model\PostsFactory;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;

class Index extends Posts
{
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        PageFactory $resultPageFactory,
        PostsFactory $postsFactory
    )
    {
        parent::__construct($context, $coreRegistry, $resultPageFactory, $postsFactory);
    }
    public function execute()
    {
        if ($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Hungnv_Hello::helloworld_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Posts'));

        return $resultPage;
    }
}
