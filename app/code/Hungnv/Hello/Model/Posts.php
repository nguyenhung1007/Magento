<?php
namespace Hungnv\Hello\Model;

use Magento\Framework\Model\AbstractModel;

class Posts extends AbstractModel{
    protected function _construct()
    {
        $this->_init('Hungnv\Hello\Model\ResourceModel\Posts');
    }
}
