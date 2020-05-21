<?php
namespace Hungnv\Hello\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Posts extends AbstractDb
{
    protected function _construct()
    {
        // magetop_hello là tên bảng , id là khóa chính primary của bảng
        $this->_init('hungnv_table', 'id');
    }
}
