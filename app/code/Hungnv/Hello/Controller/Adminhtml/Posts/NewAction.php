<?php
namespace Hungnv\Hello\Controller\Adminhtml\Posts;

use Hungnv\Hello\Controller\Adminhtml\Posts;

class NewAction extends Posts
{
    /**
     * Create new news action
     *
     * @return void
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}
