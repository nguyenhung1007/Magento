<?php
namespace Hungnv\Hello\Controller\Adminhtml\Posts;

use Hungnv\Hello\Controller\Adminhtml\Posts;

class Grid extends Posts
{
    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}
