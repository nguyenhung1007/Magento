<?php
namespace Hungnv\Hello\Block;

class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Xin Chào Nguyễn Hùng!';
    }
    public function getHellophp()
    {
        return 'Admin Xin Chào Nguyễn Hùng!';
    }
}
