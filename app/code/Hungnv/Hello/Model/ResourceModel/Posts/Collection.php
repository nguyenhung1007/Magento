<?php
namespace Hungnv\Hello\Model\ResourceModel\Posts;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Hungnv\Hello\Model\Posts',
            'Hungnv\Hello\Model\ResourceModel\Posts'
        );
    }
}
